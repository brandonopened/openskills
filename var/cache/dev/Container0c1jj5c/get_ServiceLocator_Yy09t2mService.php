<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yy09t2mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yy09t2m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yy09t2m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lsDoc' => ['privates', '.errored..service_locator.yy09t2m.App\\Entity\\Framework\\LsDoc', NULL, 'Cannot autowire service ".service_locator.yy09t2m": it references class "App\\Entity\\Framework\\LsDoc" but no such service exists.'],
        ], [
            'lsDoc' => 'App\\Entity\\Framework\\LsDoc',
        ]);
    }
}
