<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data.factory.manufacturer_address' shared service.

return $this->services['prestashop.core.grid.data.factory.manufacturer_address'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\DoctrineGridDataFactory(($this->services['prestashop.core.grid.query_builder.manufacturer_address'] ?? $this->load('getPrestashop_Core_Grid_QueryBuilder_ManufacturerAddressService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.core.grid.query.doctrine_query_parser'] ?? ($this->services['prestashop.core.grid.query.doctrine_query_parser'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryParser())), 'manufacturer_address');
