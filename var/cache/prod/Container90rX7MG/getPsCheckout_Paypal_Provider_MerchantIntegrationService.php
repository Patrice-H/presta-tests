<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.paypal.provider.merchant_integration' shared service.

return $this->services['ps_checkout.paypal.provider.merchant_integration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalMerchantIntegrationProvider(($this->services['ps_checkout.cache.paypal.merchant_integration'] ?? $this->load('getPsCheckout_Cache_Paypal_MerchantIntegrationService.php')));