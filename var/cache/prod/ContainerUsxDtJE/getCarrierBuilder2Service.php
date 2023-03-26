<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsxMarketingWithGoogle\Builder\CarrierBuilder' shared service.

return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Builder\\CarrierBuilder'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Builder\CarrierBuilder(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] ?? $this->load('getCarrierRepository2Service.php')), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] ?? $this->load('getCountryRepository2Service.php')), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository'] ?? $this->load('getStateRepository2Service.php')), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository'] ?? $this->load('getTaxRepository2Service.php')), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->load('getConfigurationAdapter2Service.php')));
