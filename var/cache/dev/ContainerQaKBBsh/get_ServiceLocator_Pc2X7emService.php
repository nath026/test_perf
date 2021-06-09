<?php

namespace ContainerQaKBBsh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pc2X7emService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pc2X7em' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pc2X7em'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'role' => ['privates', '.errored..service_locator.pc2X7em.App\\Entity\\Roles', NULL, 'Cannot autowire service ".service_locator.pc2X7em": it references class "App\\Entity\\Roles" but no such service exists.'],
        ], [
            'role' => 'App\\Entity\\Roles',
        ]);
    }
}
