<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCaseV1P0ControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Api\CaseV1P0Controller' shared autowired service.
     *
     * @return \App\Controller\Api\CaseV1P0Controller
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Api\\CaseV1P0Controller'] = $instance = new \App\Controller\Api\CaseV1P0Controller(($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService')), '190202');

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\Api\\CaseV1P0Controller', $container));
        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}