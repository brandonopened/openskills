<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__FdxI8hService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..FdxI8h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..FdxI8h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'item' => ['privates', '.errored..service_locator..FdxI8h.App\\Entity\\Framework\\LsItem', NULL, 'Cannot autowire service ".service_locator..FdxI8h": it references class "App\\Entity\\Framework\\LsItem" but no such service exists.'],
        ], [
            'item' => 'App\\Entity\\Framework\\LsItem',
        ]);
    }
}
