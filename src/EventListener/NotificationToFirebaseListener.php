<?php

namespace App\EventListener;

use App\Event\NotificationEvent;
use App\Service\LoggerTrait;
use Kreait\Firebase\Database;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\TerminateEvent;

/**
 * Firebase data structure.
 *
 * "doc": {
 *     doc_id: {
 *         "notification": [
 *             KEY: {
 *                 "at": <milliseconds since epoch>,
 *                 "msgId": "message id here",
 *                 "msg": "message here",
 *                 "by": "username here",
 *                 "changes": [
 *                     "{item,doc,assoc}-{a,u,d,l,ul}": [
 *                         object-id: "object identifier", ...
 *                     ],
 *                 ],
 *             }
 *         ]
 *     }
 * }
 */
class NotificationToFirebaseListener implements EventSubscriberInterface
{
    use LoggerTrait;

    /**
     * @var Database|null
     */
    private $firebaseDb;

    /**
     * @var string
     */
    private $firebasePrefix;

    public function __construct(?Database $firebaseDb, ?string $firebasePrefix = null)
    {
        $this->firebaseDb = $firebaseDb;
        $this->firebasePrefix = !empty($firebasePrefix) ? $firebasePrefix : 'opensalt';
    }

    public static function getSubscribedEvents(): array
    {
        return [NotificationEvent::class => 'handleNotification'];
    }

    public function handleNotification(NotificationEvent $event, string $eventName, EventDispatcherInterface $dispatcher): void
    {
        if (null === $this->firebaseDb) {
            $this->debug('Firebase not enabled');
            return;
        }

        $doc = $event->getDoc();
        if (null === $doc) {
            // Only add doc change records to firebase
            return;
        }
        $docId = $doc->getId();

        $notification = [
            'msgId' => $event->getMessageId(),
            'msg' => $event->getMessage(),
            'by' => $event->getUsername(),
            'changes' => $event->getChanged(),
            'at' => (int) (new \DateTime())->format('Uv'),
        ];

        // Send the notification after the response is sent
        $dispatcher->addListener(
            'kernel.terminate',
            function (TerminateEvent $event) use ($notification, $docId) {
                $this->addDocChangeToFirebase($notification, $docId);
            },
            10
        );

        try {
            // Clean up old notifications around 1% of the time
            if (1 === random_int(1, 100)) {
                $dispatcher->addListener(
                    'kernel.terminate',
                    function (TerminateEvent $event) {
                        $this->cleanupOldNotifications();
                    },
                    -10
                );
            }
        } catch (\Exception $e) {
            // Ignore if cannot get enough entropy for random_int
        }
    }

    protected function addDocChangeToFirebase(array $notification, int $docId): void
    {
        if (null === $this->firebaseDb) {
            return;
        }

        $this->info('Adding to firebase', [
            'msg' => $notification['msg'],
            'user' => $notification['by'],
            'changes' => $notification['changes'],
        ]);

        $path = '/'.$this->firebasePrefix."/doc/{$docId}/notification";
        $db = $this->firebaseDb;
        $db->getReference($path)->push($notification);
    }

    protected function cleanupOldNotifications(): void
    {
        if (null === $this->firebaseDb) {
            return;
        }

        $expireBefore = (new \DateTime('now - 5 minutes'))->format('Uv');
        $removeKeys = [];
        $path = '/'.$this->firebasePrefix.'/doc';

        $db = $this->firebaseDb;
        $docs = $db->getReference($path)->getValue();
        if (null !== $docs) {
            foreach ($docs as $doc => $content) {
                if (array_key_exists('notification', $content)) {
                    foreach ($content['notification'] as $key => $notification) {
                        if ($expireBefore > $notification['at']) {
                            $removeKeys["/doc/{$doc}/notification/{$key}"] = null;
                        }
                    }
                }
            }

            if (0 < \count($removeKeys)) {
                $db->getReference()->update($removeKeys);
            }
        }
    }
}
