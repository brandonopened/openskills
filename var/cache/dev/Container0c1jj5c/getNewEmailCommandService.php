<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewEmailCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand' shared autowired service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/AbstractSwiftMailerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/NewEmailCommand.php';

        $container->privates['Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand();

        $instance->setName('swiftmailer:email:send');

        return $instance;
    }
}
