<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getItemVoter2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.App\Security\Voter\ItemVoter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';

        return $container->privates['debug.security.voter.App\\Security\\Voter\\ItemVoter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($container->privates['App\\Security\\Voter\\ItemVoter'] ?? $container->load('getItemVoterService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
