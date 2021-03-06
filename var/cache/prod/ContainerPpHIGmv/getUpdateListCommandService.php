<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateListCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Console\Mirror\UpdateListCommand' shared autowired service.
     *
     * @return \App\Console\Mirror\UpdateListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Console\\Mirror\\UpdateListCommand'] = $instance = new \App\Console\Mirror\UpdateListCommand(($container->privates['App\\Service\\MirrorServer'] ?? $container->load('getMirrorServerService')));

        $instance->setName('jobs:update-next-server');

        return $instance;
    }
}
