<?php

namespace ContainerEtseXXv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Udtutj1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Udtutj1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Udtutj1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formationRepo' => ['privates', 'App\\Repository\\FormationRepository', 'getFormationRepositoryService', true],
            'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'formationRepo' => 'App\\Repository\\FormationRepository',
            'userRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}