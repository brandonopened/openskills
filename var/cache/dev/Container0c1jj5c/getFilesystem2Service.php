<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilesystem2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'League\Flysystem\Filesystem' shared autowired service.
     *
     * @return \League\Flysystem\Filesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/Plugin/PluggableTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/ConfigAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/Filesystem.php';

        return $container->privates['League\\Flysystem\\Filesystem'] = new \League\Flysystem\Filesystem(($container->privates['League\\Flysystem\\AdapterInterface'] ?? $container->load('getAdapterInterfaceService')));
    }
}