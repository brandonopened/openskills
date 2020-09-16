<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioSecurity_CspReport_LogFormatterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_security.csp_report.log_formatter' shared service.
     *
     * @return \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Log\LogFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Log/LogFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Log/LogFormatter.php';

        return $container->privates['nelmio_security.csp_report.log_formatter'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Log\LogFormatter();
    }
}
