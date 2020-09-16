<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BpiUpGEService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.bpiUpGE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bpiUpGE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'lsDoc' => ['privates', '.errored..service_locator.bpiUpGE.App\\Entity\\Framework\\LsDoc', NULL, 'Cannot autowire service ".service_locator.bpiUpGE": it references class "App\\Entity\\Framework\\LsDoc" but no such service exists.'],
        ], [
            'authChecker' => '?',
            'lsDoc' => 'App\\Entity\\Framework\\LsDoc',
        ]);
    }
}