<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5YezXEpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5YezXEp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5YezXEp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doc' => ['privates', '.errored..service_locator.5YezXEp.App\\Entity\\Framework\\LsDoc', NULL, 'Cannot autowire service ".service_locator.5YezXEp": it references class "App\\Entity\\Framework\\LsDoc" but no such service exists.'],
        ], [
            'doc' => 'App\\Entity\\Framework\\LsDoc',
        ]);
    }
}
