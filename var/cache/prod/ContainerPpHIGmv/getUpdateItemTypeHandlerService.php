<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateItemTypeHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Handler\Framework\UpdateItemTypeHandler' shared autowired service.
     *
     * @return \App\Handler\Framework\UpdateItemTypeHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Handler\\Framework\\UpdateItemTypeHandler'] = new \App\Handler\Framework\UpdateItemTypeHandler(($container->services['validator'] ?? $container->load('getValidatorService')), ($container->privates['App\\Service\\FrameworkService'] ?? $container->load('getFrameworkServiceService')));
    }
}