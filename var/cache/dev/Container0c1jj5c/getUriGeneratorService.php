<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUriGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\UriGenerator' shared autowired service.
     *
     * @return \App\Service\UriGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/UriGenerator.php';

        return $container->privates['App\\Service\\UriGenerator'] = new \App\Service\UriGenerator(($container->services['router'] ?? $container->getRouterService()));
    }
}
