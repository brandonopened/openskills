<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddTreeAssociationHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Handler\Framework\AddTreeAssociationHandler' shared autowired service.
     *
     * @return \App\Handler\Framework\AddTreeAssociationHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Handler\\Framework\\AddTreeAssociationHandler'] = new \App\Handler\Framework\AddTreeAssociationHandler(($container->services['validator'] ?? $container->load('getValidatorService')), ($container->privates['App\\Service\\FrameworkService'] ?? $container->load('getFrameworkServiceService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
