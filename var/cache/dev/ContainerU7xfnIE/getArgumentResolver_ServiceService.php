<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['service_locator.KELS8pk'] ?? $this->load(__DIR__.'/getServiceLocator_KELS8pkService.php'));
}, 'App\\Controller\\SecurityController:loginAction' => function () {
    return ($this->privates['service_locator.KELS8pk'] ?? $this->load(__DIR__.'/getServiceLocator_KELS8pkService.php'));
}, 'App\\Controller\\SecurityController:registerAction' => function () {
    return ($this->privates['service_locator.nlTUiRz'] ?? $this->load(__DIR__.'/getServiceLocator_NlTUiRzService.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['service_locator.KELS8pk'] ?? $this->load(__DIR__.'/getServiceLocator_KELS8pkService.php'));
}, 'App\\Controller\\SecurityController::loginAction' => function () {
    return ($this->privates['service_locator.KELS8pk'] ?? $this->load(__DIR__.'/getServiceLocator_KELS8pkService.php'));
}, 'App\\Controller\\SecurityController::registerAction' => function () {
    return ($this->privates['service_locator.nlTUiRz'] ?? $this->load(__DIR__.'/getServiceLocator_NlTUiRzService.php'));
})));
