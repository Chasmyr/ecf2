<?php

namespace ContainerXZ689XA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SGjqt8NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sGjqt8N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sGjqt8N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formationRepository' => ['privates', 'App\\Repository\\FormationRepository', 'getFormationRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'formationRepository' => 'App\\Repository\\FormationRepository',
            'manager' => '?',
        ]);
    }
}
