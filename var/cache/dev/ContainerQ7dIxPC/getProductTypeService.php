<?php

namespace ContainerQ7dIxPC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProductType' shared autowired service.
     *
     * @return \App\Form\ProductType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\ProductType.php';

        return $container->privates['App\\Form\\ProductType'] = new \App\Form\ProductType();
    }
}
