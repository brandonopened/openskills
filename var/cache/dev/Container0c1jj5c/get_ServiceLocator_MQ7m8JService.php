<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MQ7m8JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M_Q7m8J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M_Q7m8J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comment' => ['privates', '.errored..service_locator.M_Q7m8J.App\\Entity\\Comment\\Comment', NULL, 'Cannot autowire service ".service_locator.M_Q7m8J": it references class "App\\Entity\\Comment\\Comment" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.M_Q7m8J.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.M_Q7m8J": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'comment' => 'App\\Entity\\Comment\\Comment',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
