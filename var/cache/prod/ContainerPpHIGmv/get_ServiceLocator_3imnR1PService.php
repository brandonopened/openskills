<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3imnR1PService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.3imnR1P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3imnR1P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'oAuthCredential' => ['privates', '.errored..service_locator.3imnR1P.App\\Entity\\Framework\\Mirror\\OAuthCredential', NULL, 'Cannot autowire service ".service_locator.3imnR1P": it references class "App\\Entity\\Framework\\Mirror\\OAuthCredential" but no such service exists.'],
        ], [
            'oAuthCredential' => 'App\\Entity\\Framework\\Mirror\\OAuthCredential',
        ]);
    }
}
