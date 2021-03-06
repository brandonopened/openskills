<?php

namespace Container0c1jj5c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsaGuzzle_Client_JsonService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'csa_guzzle.client.json' shared service.
     *
     * @return \GuzzleHttp\Client
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/HandlerStack.php';

        $a = \GuzzleHttp\HandlerStack::create();
        $a->push(($container->privates['csa_guzzle.middleware.stopwatch'] ?? $container->load('getCsaGuzzle_Middleware_StopwatchService')), 'stopwatch');
        $a->push(($container->privates['csa_guzzle.middleware.logger'] ?? $container->load('getCsaGuzzle_Middleware_LoggerService')), 'logger');
        $a->push(($container->privates['csa_guzzle.middleware.history'] ?? $container->load('getCsaGuzzle_Middleware_HistoryService')), 'history');

        return $container->services['csa_guzzle.client.json'] = new \GuzzleHttp\Client(['timeout' => 2.0, 'headers' => ['Accept' => 'application/json'], 'on_stats' => [0 => ($container->services['csa_guzzle.data_collector.history_bag'] ?? ($container->services['csa_guzzle.data_collector.history_bag'] = new \Csa\GuzzleHttp\Middleware\History\History())), 1 => 'addStats'], 'handler' => $a]);
    }
}
