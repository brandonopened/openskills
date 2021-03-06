<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLsDocAttributeRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\Framework\LsDocAttributeRepository' shared autowired service.
     *
     * @return \App\Repository\Framework\LsDocAttributeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/Framework/LsDocAttributeRepository.php';

        return $container->privates['App\\Repository\\Framework\\LsDocAttributeRepository'] = new \App\Repository\Framework\LsDocAttributeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
