<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManageAdditionalFieldVoterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\Voter\ManageAdditionalFieldVoter' shared autowired service.
     *
     * @return \App\Security\Voter\ManageAdditionalFieldVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Security\\Voter\\ManageAdditionalFieldVoter'] = $instance = new \App\Security\Voter\ManageAdditionalFieldVoter();

        $instance->setRoleChecker(($container->privates['security.role_hierarchy'] ?? $container->getSecurity_RoleHierarchyService()));

        return $instance;
    }
}
