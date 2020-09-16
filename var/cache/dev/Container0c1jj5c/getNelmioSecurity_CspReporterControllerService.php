<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioSecurity_CspReporterControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'nelmio_security.csp_reporter_controller' shared service.
     *
     * @return \Nelmio\SecurityBundle\Controller\ContentSecurityPolicyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/Controller/ContentSecurityPolicyController.php';

        return $container->services['nelmio_security.csp_reporter_controller'] = new \Nelmio\SecurityBundle\Controller\ContentSecurityPolicyController(($container->privates['nelmio_security.csp_report.logger'] ?? $container->load('getNelmioSecurity_CspReport_LoggerService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['nelmio_security.csp_report.filter'] ?? $container->load('getNelmioSecurity_CspReport_FilterService')));
    }
}
