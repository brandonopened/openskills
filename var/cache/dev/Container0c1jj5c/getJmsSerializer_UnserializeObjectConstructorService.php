<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_UnserializeObjectConstructorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'jms_serializer.unserialize_object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/UnserializeObjectConstructor.php';

        return $container->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }
}
