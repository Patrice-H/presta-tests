<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.combination.query_handler.search_combinations_for_association_handler' shared service.

return $this->services['prestashop.adapter.product.combination.query_handler.search_combinations_for_association_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler\SearchCombinationsForAssociationHandler(($this->services['prestashop.adapter.product.repository.product_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')), ($this->services['prestashop.adapter.attribute.repository.attribute_repository'] ?? $this->load('getPrestashop_Adapter_Attribute_Repository_AttributeRepositoryService.php')), ($this->services['prestashop.adapter.product.image.product_image_url_factory'] ?? $this->load('getPrestashop_Adapter_Product_Image_ProductImageUrlFactoryService.php')), ($this->services['prestashop.core.product.combination.name_builder.combination_name_builder'] ?? $this->load('getPrestashop_Core_Product_Combination_NameBuilder_CombinationNameBuilderService.php')));
