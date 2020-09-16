<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSimplethingsEntityaudit_ReaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'simplethings_entityaudit.reader' shared service.
     *
     * @return \SimpleThings\EntityAudit\AuditReader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/simplethings/entity-audit-bundle/src/SimpleThings/EntityAudit/AuditReader.php';

        return $container->services['simplethings_entityaudit.reader'] = ($container->services['simplethings_entityaudit.manager'] ?? $container->getSimplethingsEntityaudit_ManagerService())->createAuditReader(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
