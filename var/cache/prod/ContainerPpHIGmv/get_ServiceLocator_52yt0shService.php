<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_52yt0shService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.52yt0sh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.52yt0sh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mirrorService' => ['privates', 'App\\Service\\MirrorServer', 'getMirrorServerService', true],
        ], [
            'mirrorService' => 'App\\Service\\MirrorServer',
        ]);
    }
}
