<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActivateUserHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Handler\User\ActivateUserHandler' shared autowired service.
     *
     * @return \App\Handler\User\ActivateUserHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Handler\\User\\ActivateUserHandler'] = new \App\Handler\User\ActivateUserHandler(($container->services['validator'] ?? $container->load('getValidatorService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
