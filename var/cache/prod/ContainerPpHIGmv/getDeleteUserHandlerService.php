<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteUserHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Handler\User\DeleteUserHandler' shared autowired service.
     *
     * @return \App\Handler\User\DeleteUserHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Handler\\User\\DeleteUserHandler'] = new \App\Handler\User\DeleteUserHandler(($container->services['validator'] ?? $container->load('getValidatorService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
