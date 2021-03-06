<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSalt_Cache_ExternalDocsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'salt.cache.external_docs' shared autowired service.
     *
     * @return \Symfony\Component\Cache\Adapter\PdoAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->load('getDoctrine_Dbal_DefaultConnectionService'));

        if (isset($container->privates['salt.cache.external_docs'])) {
            return $container->privates['salt.cache.external_docs'];
        }

        $container->privates['salt.cache.external_docs'] = $instance = new \Symfony\Component\Cache\Adapter\PdoAdapter($a, 'externalDoc-');

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}
