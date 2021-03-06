<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCfpackageDeleteCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Console\Framework\CfpackageDeleteCommand' shared autowired service.
     *
     * @return \App\Console\Framework\CfpackageDeleteCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Console\\Framework\\CfpackageDeleteCommand'] = $instance = new \App\Console\Framework\CfpackageDeleteCommand(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setName('cfpackage:delete');

        return $instance;
    }
}
