<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddAclUsernameTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\AddAclUsernameType' shared autowired service.
     *
     * @return \App\Form\Type\AddAclUsernameType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/AddAclUsernameType.php';

        return $container->privates['App\\Form\\Type\\AddAclUsernameType'] = new \App\Form\Type\AddAclUsernameType();
    }
}
