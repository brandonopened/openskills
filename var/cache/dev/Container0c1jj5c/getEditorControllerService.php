<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditorControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Framework\EditorController' shared autowired service.
     *
     * @return \App\Controller\Framework\EditorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Framework/EditorController.php';

        $container->services['App\\Controller\\Framework\\EditorController'] = $instance = new \App\Controller\Framework\EditorController();

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\Framework\\EditorController', $container));

        return $instance;
    }
}