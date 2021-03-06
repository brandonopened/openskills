<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCodeceptionBridgeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\CodeceptionBridge' shared autowired service.
     *
     * @return \App\Service\CodeceptionBridge
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/CodeceptionBridge.php';

        $container->services['App\\Service\\CodeceptionBridge'] = $instance = new \App\Service\CodeceptionBridge();

        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
        $instance->setToggles(($container->services['qandidate.toggle.manager'] ?? $container->getQandidate_Toggle_ManagerService()), ($container->services['qandidate.toggle.user_context_factory'] ?? $container->getQandidate_Toggle_UserContextFactoryService()));
        $instance->setUserManager(($container->privates['App\\Service\\User\\UserManager'] ?? $container->load('getUserManagerService')));

        return $instance;
    }
}
