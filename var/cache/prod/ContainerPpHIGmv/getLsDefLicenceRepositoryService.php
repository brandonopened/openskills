<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLsDefLicenceRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\Framework\LsDefLicenceRepository' shared autowired service.
     *
     * @return \App\Repository\Framework\LsDefLicenceRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\Framework\\LsDefLicenceRepository'] = new \App\Repository\Framework\LsDefLicenceRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
