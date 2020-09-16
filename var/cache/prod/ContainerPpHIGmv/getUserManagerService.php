<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\User\UserManager' shared autowired service.
     *
     * @return \App\Service\User\UserManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Service\\User\\UserManager'] = new \App\Service\User\UserManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}
