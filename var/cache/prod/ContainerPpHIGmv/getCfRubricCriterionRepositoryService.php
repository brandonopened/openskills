<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCfRubricCriterionRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\Framework\CfRubricCriterionRepository' shared autowired service.
     *
     * @return \App\Repository\Framework\CfRubricCriterionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\Framework\\CfRubricCriterionRepository'] = new \App\Repository\Framework\CfRubricCriterionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
