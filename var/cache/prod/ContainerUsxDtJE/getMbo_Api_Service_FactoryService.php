<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.api.service.factory' shared service.

return $this->services['mbo.api.service.factory'] = new \PrestaShop\Module\Mbo\Api\Service\Factory([0 => ($this->services['mbo.api.service.executors.module_transition'] ?? $this->load('getMbo_Api_Service_Executors_ModuleTransitionService.php')), 1 => ($this->services['mbo.api.service.executors.config_apply'] ?? $this->load('getMbo_Api_Service_Executors_ConfigApplyService.php'))]);
