<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFrameworkUpdaterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\FrameworkUpdater' shared autowired service.
     *
     * @return \App\Service\FrameworkUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/FrameworkUpdater.php';

        return $container->privates['App\\Service\\FrameworkUpdater'] = new \App\Service\FrameworkUpdater(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\GithubImport'] ?? $container->load('getGithubImportService')));
    }
}
