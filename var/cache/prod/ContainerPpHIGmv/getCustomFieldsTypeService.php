<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomFieldsTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\CustomFieldsType' shared autowired service.
     *
     * @return \App\Form\Type\CustomFieldsType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Type\\CustomFieldsType'] = new \App\Form\Type\CustomFieldsType(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
