<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLsDefGradeTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\LsDefGradeType' shared autowired service.
     *
     * @return \App\Form\Type\LsDefGradeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/LsDefGradeType.php';

        return $container->privates['App\\Form\\Type\\LsDefGradeType'] = new \App\Form\Type\LsDefGradeType();
    }
}
