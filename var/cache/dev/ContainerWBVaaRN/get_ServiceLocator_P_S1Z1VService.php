<?php

namespace ContainerWBVaaRN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P_S1Z1VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.p.s1Z1V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.p.s1Z1V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\FichefraisController::delete' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\FichefraisController::edit' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\FichefraisController::index' => ['privates', '.service_locator.jgehfAM', 'get_ServiceLocator_JgehfAMService', true],
            'App\\Controller\\FichefraisController::show' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\VisiteurController::delete' => ['privates', '.service_locator.Z7D4XtT', 'get_ServiceLocator_Z7D4XtTService', true],
            'App\\Controller\\VisiteurController::edit' => ['privates', '.service_locator.Z7D4XtT', 'get_ServiceLocator_Z7D4XtTService', true],
            'App\\Controller\\VisiteurController::index' => ['privates', '.service_locator.WxSBQHT', 'get_ServiceLocator_WxSBQHTService', true],
            'App\\Controller\\VisiteurController::show' => ['privates', '.service_locator.Z7D4XtT', 'get_ServiceLocator_Z7D4XtTService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\FichefraisController:delete' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\FichefraisController:edit' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\FichefraisController:index' => ['privates', '.service_locator.jgehfAM', 'get_ServiceLocator_JgehfAMService', true],
            'App\\Controller\\FichefraisController:show' => ['privates', '.service_locator.snGbxDq', 'get_ServiceLocator_SnGbxDqService', true],
            'App\\Controller\\VisiteurController:delete' => ['privates', '.service_locator.Z7D4XtT', 'get_ServiceLocator_Z7D4XtTService', true],
            'App\\Controller\\VisiteurController:edit' => ['privates', '.service_locator.Z7D4XtT', 'get_ServiceLocator_Z7D4XtTService', true],
            'App\\Controller\\VisiteurController:index' => ['privates', '.service_locator.WxSBQHT', 'get_ServiceLocator_WxSBQHTService', true],
            'App\\Controller\\VisiteurController:show' => ['privates', '.service_locator.Z7D4XtT', 'get_ServiceLocator_Z7D4XtTService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\FichefraisController::delete' => '?',
            'App\\Controller\\FichefraisController::edit' => '?',
            'App\\Controller\\FichefraisController::index' => '?',
            'App\\Controller\\FichefraisController::show' => '?',
            'App\\Controller\\VisiteurController::delete' => '?',
            'App\\Controller\\VisiteurController::edit' => '?',
            'App\\Controller\\VisiteurController::index' => '?',
            'App\\Controller\\VisiteurController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\FichefraisController:delete' => '?',
            'App\\Controller\\FichefraisController:edit' => '?',
            'App\\Controller\\FichefraisController:index' => '?',
            'App\\Controller\\FichefraisController:show' => '?',
            'App\\Controller\\VisiteurController:delete' => '?',
            'App\\Controller\\VisiteurController:edit' => '?',
            'App\\Controller\\VisiteurController:index' => '?',
            'App\\Controller\\VisiteurController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
