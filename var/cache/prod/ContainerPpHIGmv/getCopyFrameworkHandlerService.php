<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCopyFrameworkHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Handler\Framework\CopyFrameworkHandler' shared autowired service.
     *
     * @return \App\Handler\Framework\CopyFrameworkHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Handler\\Framework\\CopyFrameworkHandler'] = new \App\Handler\Framework\CopyFrameworkHandler(($container->services['validator'] ?? $container->load('getValidatorService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
