<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLsDefAssociationGroupingRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\Framework\LsDefAssociationGroupingRepository' shared autowired service.
     *
     * @return \App\Repository\Framework\LsDefAssociationGroupingRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\Framework\\LsDefAssociationGroupingRepository'] = new \App\Repository\Framework\LsDefAssociationGroupingRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
