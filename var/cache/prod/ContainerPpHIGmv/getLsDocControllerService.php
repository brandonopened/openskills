<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLsDocControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Framework\LsDocController' shared autowired service.
     *
     * @return \App\Controller\Framework\LsDocController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Framework\\LsDocController'] = $instance = new \App\Controller\Framework\LsDocController(($container->services['csa_guzzle.client.json'] ?? $container->load('getCsaGuzzle_Client_JsonService')), ($container->services['security.authorization_checker'] ?? $container->getSecurity_AuthorizationCheckerService()));

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\Framework\\LsDocController', $container));
        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}