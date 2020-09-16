<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManageOrganizationVoterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\Voter\ManageOrganizationVoter' shared autowired service.
     *
     * @return \App\Security\Voter\ManageOrganizationVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Security\\Voter\\ManageOrganizationVoter'] = $instance = new \App\Security\Voter\ManageOrganizationVoter();

        $instance->setRoleChecker(($container->privates['security.role_hierarchy'] ?? $container->getSecurity_RoleHierarchyService()));

        return $instance;
    }
}
