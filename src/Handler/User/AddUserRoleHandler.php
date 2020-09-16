<?php

namespace App\Handler\User;

use App\Command\User\AddUserRoleCommand;
use App\Event\CommandEvent;
use App\Handler\BaseDoctrineHandler;
use App\Service\User\UserManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AddUserRoleHandler extends BaseDoctrineHandler
{
    /**
     * @var UserManager
     */
    private $userManager;

    public function __construct(ValidatorInterface $validator, EntityManagerInterface $entityManager, UserManager $userManager)
    {
        parent::__construct($validator, $entityManager);
        $this->userManager = $userManager;
    }

    public function handle(CommandEvent $event, string $eventName, EventDispatcherInterface $dispatcher): void
    {
        /** @var AddUserRoleCommand $command */
        $command = $event->getCommand();
        $this->validate($command, $command);

        $username = $command->getUserName();
        $role = $command->getRole();

        $this->userManager->addRoleToUser($username, $role);
    }
}
