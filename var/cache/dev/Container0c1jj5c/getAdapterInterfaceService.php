<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdapterInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'League\Flysystem\AdapterInterface' shared autowired service.
     *
     * @return \League\Flysystem\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/ReadInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/AdapterInterface.php';

        return $container->privates['League\\Flysystem\\AdapterInterface'] = ($container->privates['App\\Service\\BucketFactory'] ?? $container->load('getBucketFactoryService'))->filesystem();
    }
}
