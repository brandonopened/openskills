<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommandEventRouterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\EventListener\CommandEventRouter' shared autowired service.
     *
     * @return \App\EventListener\CommandEventRouter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\EventListener\\CommandEventRouter'] = $instance = new \App\EventListener\CommandEventRouter(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}