<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLsItemControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Framework\LsItemController' shared autowired service.
     *
     * @return \App\Controller\Framework\LsItemController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Command/CommandDispatcherTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Framework/LsItemController.php';

        $container->services['App\\Controller\\Framework\\LsItemController'] = $instance = new \App\Controller\Framework\LsItemController($container->getEnv('BUCKET_PROVIDER'));

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\Framework\\LsItemController', $container));
        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}
