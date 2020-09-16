<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PRiEuitService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.pRiEuit' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pRiEuit'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bucket' => ['privates', 'App\\Service\\BucketService', 'getBucketServiceService', true],
            'doc' => ['privates', '.errored..service_locator.pRiEuit.App\\Entity\\Framework\\LsDoc', NULL, 'Cannot autowire service ".service_locator.pRiEuit": it references class "App\\Entity\\Framework\\LsDoc" but no such service exists.'],
        ], [
            'bucket' => 'App\\Service\\BucketService',
            'doc' => 'App\\Entity\\Framework\\LsDoc',
        ]);
    }
}
