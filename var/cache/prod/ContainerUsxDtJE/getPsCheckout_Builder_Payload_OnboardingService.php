<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.builder.payload.onboarding' shared service.

return $this->services['ps_checkout.builder.payload.onboarding'] = new \PrestaShop\Module\PrestashopCheckout\Builder\Payload\OnboardingPayloadBuilder(($this->services['ps_checkout.repository.prestashop.account'] ?? $this->load('getPsCheckout_Repository_Prestashop_AccountService.php')), ($this->services['ps_checkout.adapter.language'] ?? $this->load('getPsCheckout_Adapter_LanguageService.php')), ($this->services['ps_checkout.builder.module_link'] ?? ($this->services['ps_checkout.builder.module_link'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder())));
