<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSessionControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\SessionController' shared autowired service.
     *
     * @return \App\Controller\SessionController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\SessionController'] = $instance = new \App\Controller\SessionController($container->getEnv('int:SESSION_MAX_IDLE_TIME'));

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\SessionController', $container));

        return $instance;
    }
}
