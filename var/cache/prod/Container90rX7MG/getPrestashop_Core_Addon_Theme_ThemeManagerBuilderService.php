<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.addon.theme.theme_manager_builder' shared service.

return $this->services['prestashop.core.addon.theme.theme_manager_builder'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManagerBuilder(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext(), ($this->services['prestashop.adapter.legacy_db'] ?? $this->load('getPrestashop_Adapter_LegacyDbService.php')), ($this->services['prestashop.core.addon.theme.theme_validator'] ?? $this->load('getPrestashop_Core_Addon_Theme_ThemeValidatorService.php')));
