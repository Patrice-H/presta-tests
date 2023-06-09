<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.sdk.paypal.linkbuilder' shared service.

return $this->services['ps_checkout.sdk.paypal.linkbuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder(($this->services['ps_checkout.repository.paypal.account'] ?? $this->load('getPsCheckout_Repository_Paypal_AccountService.php')), ($this->services['ps_checkout.paypal.configuration'] ?? $this->load('getPsCheckout_Paypal_ConfigurationService.php')), ($this->services['ps_checkout.pay_later.configuration'] ?? $this->load('getPsCheckout_PayLater_ConfigurationService.php')), ($this->services['ps_checkout.funding_source.configuration.repository'] ?? $this->load('getPsCheckout_FundingSource_Configuration_RepositoryService.php')), ($this->services['ps_checkout.express_checkout.configuration'] ?? $this->load('getPsCheckout_ExpressCheckout_ConfigurationService.php')));
