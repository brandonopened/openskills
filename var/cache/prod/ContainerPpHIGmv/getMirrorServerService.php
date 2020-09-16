<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMirrorServerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\MirrorServer' shared autowired service.
     *
     * @return \App\Service\MirrorServer
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Service\\MirrorServer'] = $instance = new \App\Service\MirrorServer(($container->services['csa_guzzle.client.json'] ?? $container->load('getCsaGuzzle_Client_JsonService')), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['csa_guzzle.middleware.logger'] ?? $container->load('getCsaGuzzle_Middleware_LoggerService'));
        }, 1), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}