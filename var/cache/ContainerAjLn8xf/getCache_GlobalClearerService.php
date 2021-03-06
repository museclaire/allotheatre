<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.global_clearer' shared service.

include_once $this->targetDirs[2].'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ($this->services['cache.app'] ?? $this->load(__DIR__.'/getCache_AppService.php')), 'cache.system' => ($this->services['cache.system'] ?? $this->load(__DIR__.'/getCache_SystemService.php')), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->load(__DIR__.'/getCache_ValidatorService.php')), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
