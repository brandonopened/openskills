<?php

namespace ContainerPpHIGmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDatabaseService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Kreait\Firebase\Database' shared autowired service.
     *
     * @return \Kreait\Firebase\Database
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Kreait\\Firebase\\Database'] = (new \App\Service\FirebaseFactory())->createFirebaseDatabase(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), $container->getEnv('FIREBASE_PROJECT_ID'), $container->getEnv('FIREBASE_CLIENT_ID'), $container->getEnv('FIREBASE_CLIENT_EMAIL'), $container->getEnv('FIREBASE_PRIVATE_KEY'), $container->getEnv('FIREBASE_DB_URL'));
    }
}