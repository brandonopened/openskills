<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiExceptionListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\EventListener\ApiExceptionListener' shared autowired service.
     *
     * @return \App\EventListener\ApiExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\EventListener\\ApiExceptionListener'] = $instance = new \App\EventListener\ApiExceptionListener(($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService')));

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}
