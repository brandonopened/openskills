<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_SerializationGraphNavigatorFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'jms_serializer.serialization_graph_navigator_factory' shared service.
     *
     * @return \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/SerializationGraphNavigatorFactory.php';

        return $container->privates['jms_serializer.serialization_graph_navigator_factory'] = new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory(($container->privates['jms_serializer.metadata_factory'] ?? $container->load('getJmsSerializer_MetadataFactoryService')), ($container->privates['jms_serializer.handler_registry'] ?? $container->load('getJmsSerializer_HandlerRegistryService')), ($container->privates['jms_serializer.accessor_strategy.default'] ?? $container->load('getJmsSerializer_AccessorStrategy_DefaultService')), ($container->privates['jms_serializer.event_dispatcher'] ?? $container->load('getJmsSerializer_EventDispatcherService')), ($container->privates['jms_serializer.expression_evaluator'] ?? $container->load('getJmsSerializer_ExpressionEvaluatorService')));
    }
}
