<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsaGuzzle_Middleware_LoggerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'csa_guzzle.middleware.logger' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['csa_guzzle.middleware.logger'] = \GuzzleHttp\Middleware::log(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), new \GuzzleHttp\MessageFormatter('{hostname} {req_header_User-Agent} - [{date_common_log}] "{method} {target} HTTP/{version}" {code} {res_header_Content-Length}'), 'debug');
    }
}