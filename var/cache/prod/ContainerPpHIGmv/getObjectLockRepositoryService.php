<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getObjectLockRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\Framework\ObjectLockRepository' shared autowired service.
     *
     * @return \App\Repository\Framework\ObjectLockRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\Framework\\ObjectLockRepository'] = new \App\Repository\Framework\ObjectLockRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
