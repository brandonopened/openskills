<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCfRubricRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\Framework\CfRubricRepository' shared autowired service.
     *
     * @return \App\Repository\Framework\CfRubricRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\Framework\\CfRubricRepository'] = new \App\Repository\Framework\CfRubricRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
