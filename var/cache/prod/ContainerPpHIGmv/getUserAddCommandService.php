<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserAddCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.App\Console\User\UserAddCommand' shared autowired service.
     *
     * @return \App\Console\User\UserAddCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['console.command.public_alias.App\\Console\\User\\UserAddCommand'] = new \App\Console\User\UserAddCommand(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}