<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMirroredServerDTOTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\MirroredServerDTOType' shared autowired service.
     *
     * @return \App\Form\Type\MirroredServerDTOType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Type\\MirroredServerDTOType'] = new \App\Form\Type\MirroredServerDTOType();
    }
}
