<?php

namespace ContainerMtwB5tx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnexionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ConnexionController' shared autowired service.
     *
     * @return \App\Controller\ConnexionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ConnexionController.php';

        $container->services['App\\Controller\\ConnexionController'] = $instance = new \App\Controller\ConnexionController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\ConnexionController', $container));

        return $instance;
    }
}
