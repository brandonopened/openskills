<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoveChildHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Handler\Framework\RemoveChildHandler' shared autowired service.
     *
     * @return \App\Handler\Framework\RemoveChildHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Handler/BaseValidatedHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Handler/AbstractDoctrineHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Handler/BaseDoctrineHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Handler/Framework/RemoveChildHandler.php';

        return $container->privates['App\\Handler\\Framework\\RemoveChildHandler'] = new \App\Handler\Framework\RemoveChildHandler(($container->services['validator'] ?? $container->getValidatorService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
