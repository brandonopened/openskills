<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getItemTypesTransformerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataTransformer\CaseJson\ItemTypesTransformer' shared autowired service.
     *
     * @return \App\DataTransformer\CaseJson\ItemTypesTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/DataTransformer/CaseJson/ItemTypesTransformer.php';

        return $container->privates['App\\DataTransformer\\CaseJson\\ItemTypesTransformer'] = new \App\DataTransformer\CaseJson\ItemTypesTransformer(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
