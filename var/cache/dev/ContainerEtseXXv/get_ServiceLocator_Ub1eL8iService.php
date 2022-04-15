<?php

namespace ContainerEtseXXv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ub1eL8iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ub1eL8i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ub1eL8i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'sectionRepository' => ['privates', 'App\\Repository\\SectionRepository', 'getSectionRepositoryService', true],
        ], [
            'manager' => '?',
            'sectionRepository' => 'App\\Repository\\SectionRepository',
        ]);
    }
}