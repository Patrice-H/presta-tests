<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.store.module.context' shared service.

return $this->services['ps_checkout.store.module.context'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule(($this->services['ps_checkout.module'] ?? $this->load('getPsCheckout_ModuleService.php'))->name, ($this->services['ps_checkout.module'] ?? $this->load('getPsCheckout_ModuleService.php'))->module_key, ($this->services['ps_checkout.context.prestashop'] ?? ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())), ($this->services['ps_checkout.paypal.configuration'] ?? $this->load('getPsCheckout_Paypal_ConfigurationService.php')), ($this->services['ps_checkout.step.live'] ?? $this->load('getPsCheckout_Step_LiveService.php')), ($this->services['ps_checkout.step.value'] ?? $this->load('getPsCheckout_Step_ValueService.php')), ($this->services['ps_checkout.translations.translations'] ?? $this->load('getPsCheckout_Translations_TranslationsService.php')), ($this->services['ps_checkout.context.shop'] ?? ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())), ($this->services['ps_checkout.shop.provider'] ?? ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())), ($this->services['ps_checkout.builder.module_link'] ?? ($this->services['ps_checkout.builder.module_link'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder())));
