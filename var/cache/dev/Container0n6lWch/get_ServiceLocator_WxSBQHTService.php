<?php

namespace Container0n6lWch;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WxSBQHTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WxSBQHT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WxSBQHT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'visiteurRepository' => ['privates', 'App\\Repository\\VisiteurRepository', 'getVisiteurRepositoryService', true],
        ], [
            'visiteurRepository' => 'App\\Repository\\VisiteurRepository',
        ]);
    }
}
