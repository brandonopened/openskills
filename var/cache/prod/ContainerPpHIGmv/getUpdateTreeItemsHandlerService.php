<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateTreeItemsHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Handler\Framework\UpdateTreeItemsHandler' shared autowired service.
     *
     * @return \App\Handler\Framework\UpdateTreeItemsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Handler\\Framework\\UpdateTreeItemsHandler'] = new \App\Handler\Framework\UpdateTreeItemsHandler(($container->services['validator'] ?? $container->load('getValidatorService')), ($container->privates['App\\Service\\FrameworkService'] ?? $container->load('getFrameworkServiceService')));
    }
}
