<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentVoterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\Voter\CommentVoter' shared autowired service.
     *
     * @return \App\Security\Voter\CommentVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/Voter.php';
        include_once \dirname(__DIR__, 4).'/src/Security/Voter/RoleCheckTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Security/Voter/FeatureCheckTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Security/Voter/CommentVoter.php';

        $container->privates['App\\Security\\Voter\\CommentVoter'] = $instance = new \App\Security\Voter\CommentVoter();

        $instance->setRoleChecker(($container->privates['security.role_hierarchy'] ?? $container->getSecurity_RoleHierarchyService()));
        $instance->setToggleManager(($container->services['qandidate.toggle.manager'] ?? $container->getQandidate_Toggle_ManagerService()), ($container->services['qandidate.toggle.user_context_factory'] ?? $container->getQandidate_Toggle_UserContextFactoryService()));

        return $instance;
    }
}
