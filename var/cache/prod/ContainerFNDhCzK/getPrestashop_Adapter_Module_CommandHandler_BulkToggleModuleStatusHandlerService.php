<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.module.command_handler.bulk_toggle_module_status_handler' shared service.

return $this->services['prestashop.adapter.module.command_handler.bulk_toggle_module_status_handler'] = new \PrestaShop\PrestaShop\Adapter\Module\CommandHandler\BulkToggleModuleStatusHandler(($this->services['prestashop.module.manager'] ?? $this->load('getPrestashop_Module_ManagerService.php')), ($this->services['prestashop.adapter.legacy.logger'] ?? ($this->services['prestashop.adapter.legacy.logger'] = new \PrestaShop\PrestaShop\Adapter\LegacyLogger())), ($this->services['prestashop.core.cache.clearer.cache_clearer_chain'] ?? $this->load('getPrestashop_Core_Cache_Clearer_CacheClearerChainService.php')));
