<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationToFirebaseListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\EventListener\NotificationToFirebaseListener' shared autowired service.
     *
     * @return \App\EventListener\NotificationToFirebaseListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\EventListener\\NotificationToFirebaseListener'] = $instance = new \App\EventListener\NotificationToFirebaseListener(($container->privates['Kreait\\Firebase\\Database'] ?? $container->load('getDatabaseService')), $container->getEnv('FIREBASE_PREFIX'));

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}
