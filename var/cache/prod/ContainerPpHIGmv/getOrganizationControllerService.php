<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrganizationControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\User\OrganizationController' shared autowired service.
     *
     * @return \App\Controller\User\OrganizationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\User\\OrganizationController'] = $instance = new \App\Controller\User\OrganizationController();

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\User\\OrganizationController', $container));
        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}