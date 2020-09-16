<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteConceptHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Handler\Framework\DeleteConceptHandler' shared autowired service.
     *
     * @return \App\Handler\Framework\DeleteConceptHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Handler/BaseValidatedHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Handler/Framework/BaseFrameworkHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Handler/Framework/DeleteConceptHandler.php';

        return $container->privates['App\\Handler\\Framework\\DeleteConceptHandler'] = new \App\Handler\Framework\DeleteConceptHandler(($container->services['validator'] ?? $container->getValidatorService()), ($container->privates['App\\Service\\FrameworkService'] ?? $container->load('getFrameworkServiceService')));
    }
}
