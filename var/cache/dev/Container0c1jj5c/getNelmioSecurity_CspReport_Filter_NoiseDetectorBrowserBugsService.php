<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioSecurity_CspReport_Filter_NoiseDetectorBrowserBugsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_security.csp_report.filter.noise_detector_browser_bugs' shared service.
     *
     * @return \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\BrowserBugsNoiseDetector
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Filter/NoiseDetectorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/ContentSecurityPolicy/Violation/Filter/BrowserBugsNoiseDetector.php';

        return $container->privates['nelmio_security.csp_report.filter.noise_detector_browser_bugs'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\BrowserBugsNoiseDetector(($container->privates['nelmio_security.ua_parser.ua_php.provider'] ?? $container->load('getNelmioSecurity_UaParser_UaPhp_ProviderService')));
    }
}