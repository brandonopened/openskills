<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSimplethingsEntityaudit_ReaderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'simplethings_entityaudit.reader' shared service.
     *
     * @return \SimpleThings\EntityAudit\AuditReader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['simplethings_entityaudit.reader'] = ($container->services['simplethings_entityaudit.manager'] ?? $container->load('getSimplethingsEntityaudit_ManagerService'))->createAuditReader(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
