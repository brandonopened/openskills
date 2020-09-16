<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddTreeAssociationHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Handler\Framework\AddTreeAssociationHandler' shared autowired service.
     *
     * @return \App\Handler\Framework\AddTreeAssociationHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Handler/BaseValidatedHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Handler/Framework/BaseFrameworkHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Handler/Framework/AddTreeAssociationHandler.php';

        return $container->privates['App\\Handler\\Framework\\AddTreeAssociationHandler'] = new \App\Handler\Framework\AddTreeAssociationHandler(($container->services['validator'] ?? $container->getValidatorService()), ($container->privates['App\\Service\\FrameworkService'] ?? $container->load('getFrameworkServiceService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
