<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApi1UrisService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Service\Api1Uris' shared autowired service.
     *
     * @return \App\Service\Api1Uris
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['App\\Service\\Api1Uris'] = new \App\Service\Api1Uris(($container->services['router'] ?? $container->getRouterService()), ($container->privates['App\\Service\\UriGenerator'] ?? $container->load('getUriGeneratorService')));
    }
}
