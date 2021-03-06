<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLsDocControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Framework\LsDocController' shared autowired service.
     *
     * @return \App\Controller\Framework\LsDocController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Command/CommandDispatcherTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Framework/LsDocController.php';

        $container->services['App\\Controller\\Framework\\LsDocController'] = $instance = new \App\Controller\Framework\LsDocController(($container->services['csa_guzzle.client.json'] ?? $container->load('getCsaGuzzle_Client_JsonService')), ($container->services['security.authorization_checker'] ?? $container->getSecurity_AuthorizationCheckerService()));

        $instance->setContainer(($container->privates['.service_locator.zCZyUMB'] ?? $container->load('get_ServiceLocator_ZCZyUMBService'))->withContext('App\\Controller\\Framework\\LsDocController', $container));
        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        return $instance;
    }
}
