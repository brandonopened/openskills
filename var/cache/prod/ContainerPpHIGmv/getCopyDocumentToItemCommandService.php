<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCopyDocumentToItemCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.App\Console\Framework\CopyDocumentToItemCommand' shared autowired service.
     *
     * @return \App\Console\Framework\CopyDocumentToItemCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['console.command.public_alias.App\\Console\\Framework\\CopyDocumentToItemCommand'] = new \App\Console\Framework\CopyDocumentToItemCommand(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}