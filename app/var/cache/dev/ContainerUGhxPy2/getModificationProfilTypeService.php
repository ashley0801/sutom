<?php

namespace ContainerUGhxPy2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModificationProfilTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ModificationProfilType' shared autowired service.
     *
     * @return \App\Form\ModificationProfilType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ModificationProfilType.php';
        include_once \dirname(__DIR__, 4).'/src/Service/AvatarService.php';

        return $container->privates['App\\Form\\ModificationProfilType'] = new \App\Form\ModificationProfilType(new \App\Service\AvatarService());
    }
}