<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__XIEchKService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator..XIEchK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..XIEchK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'organization' => ['privates', '.errored..service_locator..XIEchK.App\\Entity\\User\\Organization', NULL, 'Cannot autowire service ".service_locator..XIEchK": it references class "App\\Entity\\User\\Organization" but no such service exists.'],
        ], [
            'organization' => 'App\\Entity\\User\\Organization',
        ]);
    }
}
