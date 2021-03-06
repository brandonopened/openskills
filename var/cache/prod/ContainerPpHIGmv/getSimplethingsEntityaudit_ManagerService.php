<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSimplethingsEntityaudit_ManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'simplethings_entityaudit.manager' shared service.
     *
     * @return \SimpleThings\EntityAudit\AuditManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['simplethings_entityaudit.manager'] = new \SimpleThings\EntityAudit\AuditManager(($container->services['simplethings_entityaudit.config'] ?? $container->load('getSimplethingsEntityaudit_ConfigService')));
    }
}
