<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddUserByNameHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Handler\User\AddUserByNameHandler' shared autowired service.
     *
     * @return \App\Handler\User\AddUserByNameHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Handler\\User\\AddUserByNameHandler'] = new \App\Handler\User\AddUserByNameHandler(($container->services['validator'] ?? $container->load('getValidatorService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['App\\Service\\User\\UserManager'] ?? $container->load('getUserManagerService')));
    }
}
