<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFrameworkServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\FrameworkService' shared autowired service.
     *
     * @return \App\Service\FrameworkService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/FrameworkService.php';

        return $container->privates['App\\Service\\FrameworkService'] = new \App\Service\FrameworkService(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->services['validator'] ?? $container->getValidatorService()));
    }
}
