<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UFlu2WfService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.uFlu2Wf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uFlu2Wf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lsDefLicence' => ['privates', '.errored..service_locator.uFlu2Wf.App\\Entity\\Framework\\LsDefLicence', NULL, 'Cannot autowire service ".service_locator.uFlu2Wf": it references class "App\\Entity\\Framework\\LsDefLicence" but no such service exists.'],
        ], [
            'lsDefLicence' => 'App\\Entity\\Framework\\LsDefLicence',
        ]);
    }
}
