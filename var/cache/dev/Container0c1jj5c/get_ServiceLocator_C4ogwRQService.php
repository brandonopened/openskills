<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C4ogwRQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C4ogwRQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C4ogwRQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\SessionRepository', 'getSessionRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\SessionRepository',
        ]);
    }
}
