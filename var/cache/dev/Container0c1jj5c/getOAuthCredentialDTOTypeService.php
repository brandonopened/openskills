<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOAuthCredentialDTOTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\OAuthCredentialDTOType' shared autowired service.
     *
     * @return \App\Form\Type\OAuthCredentialDTOType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/OAuthCredentialDTOType.php';

        return $container->privates['App\\Form\\Type\\OAuthCredentialDTOType'] = new \App\Form\Type\OAuthCredentialDTOType();
    }
}