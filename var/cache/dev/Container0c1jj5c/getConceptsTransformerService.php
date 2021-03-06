<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConceptsTransformerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataTransformer\CaseJson\ConceptsTransformer' shared autowired service.
     *
     * @return \App\DataTransformer\CaseJson\ConceptsTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/DataTransformer/CaseJson/ConceptsTransformer.php';

        return $container->privates['App\\DataTransformer\\CaseJson\\ConceptsTransformer'] = new \App\DataTransformer\CaseJson\ConceptsTransformer(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
