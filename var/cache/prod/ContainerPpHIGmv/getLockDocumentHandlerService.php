<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLockDocumentHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Handler\Framework\LockDocumentHandler' shared autowired service.
     *
     * @return \App\Handler\Framework\LockDocumentHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Handler\\Framework\\LockDocumentHandler'] = new \App\Handler\Framework\LockDocumentHandler(($container->services['validator'] ?? $container->load('getValidatorService')), ($container->privates['App\\Service\\FrameworkService'] ?? $container->load('getFrameworkServiceService')));
    }
}
