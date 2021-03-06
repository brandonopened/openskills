<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigService extends App_KernelProdContainer
{
    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/simplethings/entity-audit-bundle/src/SimpleThings/EntityAudit/Resources/views'), 'SimpleThingsEntityAudit');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/simplethings/entity-audit-bundle/src/SimpleThings/EntityAudit/Resources/views'), '!SimpleThingsEntityAudit');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/csa/guzzle-bundle/src/Resources/views'), 'CsaGuzzle');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/csa/guzzle-bundle/src/Resources/views'), '!CsaGuzzle');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TetranzSelect2EntityBundle'), 'TetranzSelect2Entity');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/tetranz/select2entity-bundle/Resources/views'), 'TetranzSelect2Entity');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/tetranz/select2entity-bundle/Resources/views'), '!TetranzSelect2Entity');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/qandidate/toggle-bundle/Resources/views'), 'QandidateToggle');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/qandidate/toggle-bundle/Resources/views'), '!QandidateToggle');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $container->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => false, 'strict_variables' => false, 'autoescape' => 'name', 'cache' => ($container->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $b = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $c = ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService());

        $d = new \Symfony\Component\Asset\Context\RequestStackContext($b, $c->getBaseUrl(), $c->isSecure());
        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('prod');
        $e->setDebug(false);
        if ($container->has('security.token_storage')) {
            $e->setTokenStorage(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
        }
        if ($container->has('request_stack')) {
            $e->setRequestStack($b);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($container->privates['security.logout_url_generator'] ?? $container->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($container->services['security.authorization_checker'] ?? $container->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($container->services['translator'] ?? $container->load('getTranslatorService'))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('190202', '%s?%s'), $d), ['encore' => new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy((\dirname(__DIR__, 4).'/public/build/manifest.json')), $d)])));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($container->services['router'] ?? $container->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($b, $c)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \Twig\Extensions\TextExtension());
        $instance->addExtension(new \App\Twig\Extension\CaseUriExtension());
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Nelmio\SecurityBundle\Twig\NelmioCSPTwigExtension(($container->privates['nelmio_security.csp_listener'] ?? $container->getNelmioSecurity_CspListenerService()), ($container->privates['nelmio_security.sha_computer'] ?? ($container->privates['nelmio_security.sha_computer'] = new \Nelmio\SecurityBundle\ContentSecurityPolicy\ShaComputer('sha256')))));
        $instance->addExtension(new \Qandidate\Bundle\ToggleBundle\Twig\ToggleTwigExtension(($container->services['qandidate.toggle.manager'] ?? $container->getQandidate_Toggle_ManagerService()), ($container->services['qandidate.toggle.user_context_factory'] ?? $container->getQandidate_Toggle_UserContextFactoryService())));
        $instance->addGlobal('app', $e);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Twig\\Extension\\CaseUriRuntime' => ['privates', 'App\\Twig\\Extension\\CaseUriRuntime', 'getCaseUriRuntimeService', true],
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => ['services', 'jms_serializer.twig_extension.serializer_runtime_helper', 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService', true],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', true],
        ], [
            'App\\Twig\\Extension\\CaseUriRuntime' => '?',
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->addGlobal('github_client_id', $container->getEnv('GITHUB_CLIENT_ID'));
        $instance->addGlobal('brand_logo_url', $container->getEnv('BRAND_LOGO_URL'));
        $instance->addGlobal('brand_logo_style', $container->getEnv('BRAND_LOGO_STYLE'));
        $instance->addGlobal('brand_link_url', $container->getEnv('BRAND_LINK_URL'));
        $instance->addGlobal('brand_link_style', $container->getEnv('BRAND_LINK_STYLE'));
        $instance->addGlobal('firebase_api_key', $container->getEnv('FIREBASE_API_KEY'));
        $instance->addGlobal('firebase_auth_domain', $container->getEnv('FIREBASE_AUTH_DOMAIN'));
        $instance->addGlobal('firebase_db_url', $container->getEnv('FIREBASE_DB_URL'));
        $instance->addGlobal('firebase_project_id', $container->getEnv('FIREBASE_PROJECT_ID'));
        $instance->addGlobal('firebase_prefix', $container->getEnv('FIREBASE_PREFIX'));
        $instance->addGlobal('google_captcha_site_key', $container->getEnv('GOOGLE_CAPTCHA_SITE_KEY'));
        $instance->addGlobal('footer_left_text', $container->getEnv('FOOTER_LEFT_TEXT'));
        $instance->addGlobal('base_template', 'base.html.twig');
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }
}
