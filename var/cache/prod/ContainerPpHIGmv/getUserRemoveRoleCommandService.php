<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserRemoveRoleCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.App\Console\User\UserRemoveRoleCommand' shared autowired service.
     *
     * @return \App\Console\User\UserRemoveRoleCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['console.command.public_alias.App\\Console\\User\\UserRemoveRoleCommand'] = new \App\Console\User\UserRemoveRoleCommand(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
