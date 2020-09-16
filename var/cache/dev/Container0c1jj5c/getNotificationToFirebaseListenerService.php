<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationToFirebaseListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\NotificationToFirebaseListener' shared autowired service.
     *
     * @return \App\EventListener\NotificationToFirebaseListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Service/LoggerTrait.php';
        include_once \dirname(__DIR__, 4).'/src/EventListener/NotificationToFirebaseListener.php';

        $container->privates['App\\EventListener\\NotificationToFirebaseListener'] = $instance = new \App\EventListener\NotificationToFirebaseListener(($container->privates['Kreait\\Firebase\\Database'] ?? $container->load('getDatabaseService')), $container->getEnv('FIREBASE_PREFIX'));

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}
