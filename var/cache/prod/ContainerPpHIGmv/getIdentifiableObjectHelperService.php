<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIdentifiableObjectHelperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\IdentifiableObjectHelper' shared autowired service.
     *
     * @return \App\Service\IdentifiableObjectHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Service\\IdentifiableObjectHelper'] = new \App\Service\IdentifiableObjectHelper(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}