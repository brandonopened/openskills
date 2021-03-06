<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDocRevisionControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\DocRevisionController' shared autowired service.
     *
     * @return \App\Controller\DocRevisionController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\DocRevisionController'] = $instance = new \App\Controller\DocRevisionController(($container->services['simplethings_entityaudit.reader'] ?? $container->load('getSimplethingsEntityaudit_ReaderService')), ($container->privates['App\\Repository\\ChangeEntryRepository'] ?? $container->load('getChangeEntryRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\DocRevisionController', $container));

        return $instance;
    }
}
