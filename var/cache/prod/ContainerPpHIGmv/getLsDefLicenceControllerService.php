<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLsDefLicenceControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Framework\LsDefLicenceController' shared autowired service.
     *
     * @return \App\Controller\Framework\LsDefLicenceController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Framework\\LsDefLicenceController'] = $instance = new \App\Controller\Framework\LsDefLicenceController();

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\Framework\\LsDefLicenceController', $container));
        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}