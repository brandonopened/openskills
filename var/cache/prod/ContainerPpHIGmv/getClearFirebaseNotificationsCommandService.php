<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClearFirebaseNotificationsCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Console\ClearFirebaseNotificationsCommand' shared autowired service.
     *
     * @return \App\Console\ClearFirebaseNotificationsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Console\\ClearFirebaseNotificationsCommand'] = $instance = new \App\Console\ClearFirebaseNotificationsCommand(($container->privates['Kreait\\Firebase\\Database'] ?? $container->load('getDatabaseService')), $container->getEnv('FIREBASE_PREFIX'));

        $instance->setName('firebase:clear');

        return $instance;
    }
}
