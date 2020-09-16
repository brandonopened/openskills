<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssociationVoterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\Voter\AssociationVoter' shared autowired service.
     *
     * @return \App\Security\Voter\AssociationVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Security\\Voter\\AssociationVoter'] = $instance = new \App\Security\Voter\AssociationVoter();

        $instance->setRoleChecker(($container->privates['security.role_hierarchy'] ?? $container->getSecurity_RoleHierarchyService()));
        $instance->setDecisionManager(($container->privates['security.access.decision_manager'] ?? $container->getSecurity_Access_DecisionManagerService()));

        return $instance;
    }
}