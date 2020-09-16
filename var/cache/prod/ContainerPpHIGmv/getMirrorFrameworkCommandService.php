<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMirrorFrameworkCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Console\Mirror\MirrorFrameworkCommand' shared autowired service.
     *
     * @return \App\Console\Mirror\MirrorFrameworkCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Console\\Mirror\\MirrorFrameworkCommand'] = $instance = new \App\Console\Mirror\MirrorFrameworkCommand(($container->privates['App\\Service\\MirrorFramework'] ?? $container->load('getMirrorFrameworkService')));

        $instance->setDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        $instance->setName('mirror:framework');

        return $instance;
    }
}
