<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.specific_price.validate.specific_price_validator' shared service.

return $this->services['prestashop.adapter.product.specific_price.validate.specific_price_validator'] = new \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Validate\SpecificPriceValidator(($this->services['prestashop.adapter.shop.repository.shop_group_repository'] ?? ($this->services['prestashop.adapter.shop.repository.shop_group_repository'] = new \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopGroupRepository())), ($this->services['prestashop.adapter.shop.repository.shop_repository'] ?? ($this->services['prestashop.adapter.shop.repository.shop_repository'] = new \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository())), ($this->services['prestashop.adapter.product.combination.repository.combination_repository'] ?? $this->load('getPrestashop_Adapter_Product_Combination_Repository_CombinationRepositoryService.php')), ($this->services['prestashop.adapter.currency.repository.currency_repository'] ?? ($this->services['prestashop.adapter.currency.repository.currency_repository'] = new \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository())), ($this->services['prestashop.adapter.country.repository.country_repository'] ?? ($this->services['prestashop.adapter.country.repository.country_repository'] = new \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository())), ($this->services['prestashop.adapter.customer.group.repository.group_repository'] ?? ($this->services['prestashop.adapter.customer.group.repository.group_repository'] = new \PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository())), ($this->services['prestashop.adapter.customer.repository.customer_repository'] ?? ($this->services['prestashop.adapter.customer.repository.customer_repository'] = new \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository())), ($this->services['prestashop.adapter.product.repository.product_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')), ($this->services['prestashop.core.util.number.number_extractor'] ?? $this->load('getPrestashop_Core_Util_Number_NumberExtractorService.php')));
