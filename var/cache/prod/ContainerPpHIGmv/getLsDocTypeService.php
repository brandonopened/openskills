<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLsDocTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\LsDocType' shared autowired service.
     *
     * @return \App\Form\Type\LsDocType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Type\\LsDocType'] = new \App\Form\Type\LsDocType(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['security.authorization_checker'] ?? $container->getSecurity_AuthorizationCheckerService()));
    }
}
