<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XS1kUvgService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.xS1kUvg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xS1kUvg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'association' => ['privates', '.errored..service_locator.xS1kUvg.App\\Entity\\Framework\\LsAssociation', NULL, 'Cannot autowire service ".service_locator.xS1kUvg": it references class "App\\Entity\\Framework\\LsAssociation" but no such service exists.'],
        ], [
            'association' => 'App\\Entity\\Framework\\LsAssociation',
        ]);
    }
}
