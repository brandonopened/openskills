<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExportControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Cms\ExportController' shared autowired service.
     *
     * @return \App\Controller\Cms\ExportController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Cms\\ExportController'] = $instance = new \App\Controller\Cms\ExportController();

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\Cms\\ExportController', $container));

        return $instance;
    }
}
