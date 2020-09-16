<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendSignupReceivedEmailHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Handler\Email\SendSignupReceivedEmailHandler' shared autowired service.
     *
     * @return \App\Handler\Email\SendSignupReceivedEmailHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Handler\\Email\\SendSignupReceivedEmailHandler'] = new \App\Handler\Email\SendSignupReceivedEmailHandler(($container->services['validator'] ?? $container->load('getValidatorService')), ($container->services['qandidate.toggle.manager'] ?? $container->getQandidate_Toggle_ManagerService()), ($container->services['qandidate.toggle.user_context_factory'] ?? $container->getQandidate_Toggle_UserContextFactoryService()), ($container->services['swiftmailer.mailer.default'] ?? $container->load('getSwiftmailer_Mailer_DefaultService')), ($container->services['twig'] ?? $container->load('getTwigService')), $container->getEnv('MAIL_FEATURE_FROM_EMAIL'));
    }
}