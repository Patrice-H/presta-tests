<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.distribution.api_config_change_handler' shared service.

return $this->services['mbo.distribution.api_config_change_handler'] = new \PrestaShop\Module\Mbo\Distribution\Config\CommandHandler\ConfigChangeCommandHandler(($this->services['mbo.distribution.config_factory'] ?? ($this->services['mbo.distribution.config_factory'] = new \PrestaShop\Module\Mbo\Distribution\Config\Factory())), ($this->services['mbo.distribution.config_applier'] ?? $this->load('getMbo_Distribution_ConfigApplierService.php')));
