<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Mirror\ServerController' shared autowired service.
     *
     * @return \App\Controller\Mirror\ServerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Mirror/ServerController.php';

        $container->services['App\\Controller\\Mirror\\ServerController'] = $instance = new \App\Controller\Mirror\ServerController();

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\Mirror\\ServerController', $container));

        return $instance;
    }
}
