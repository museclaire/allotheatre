<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_listener' shared service.

include_once $this->targetDirs[2].'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/security/Http/Firewall/AccessListener.php';
include_once $this->targetDirs[2].'/vendor/symfony/security/Http/AccessMapInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/security/Http/AccessMap.php';

return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? $this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
