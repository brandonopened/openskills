<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPdfExportControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\PdfExportController' shared autowired service.
     *
     * @return \App\Controller\PdfExportController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PdfExportController'] = $instance = new \App\Controller\PdfExportController();

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\PdfExportController', $container));
        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}
