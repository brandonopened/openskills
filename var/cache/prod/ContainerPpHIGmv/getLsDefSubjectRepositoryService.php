<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLsDefSubjectRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\Framework\LsDefSubjectRepository' shared autowired service.
     *
     * @return \App\Repository\Framework\LsDefSubjectRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\Framework\\LsDefSubjectRepository'] = new \App\Repository\Framework\LsDefSubjectRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}