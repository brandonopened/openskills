<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_109wlF9Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.109wlF9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.109wlF9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lsDefItemType' => ['privates', '.errored..service_locator.109wlF9.App\\Entity\\Framework\\LsDefItemType', NULL, 'Cannot autowire service ".service_locator.109wlF9": it references class "App\\Entity\\Framework\\LsDefItemType" but no such service exists.'],
        ], [
            'lsDefItemType' => 'App\\Entity\\Framework\\LsDefItemType',
        ]);
    }
}
