<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_pool_prune' shared service.

$this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
    yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
    yield 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService());
    yield 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService());
    yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService());
    yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService());
    yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService());
    yield 'array' => ($this->privates['array'] ?? $this->getArrayService());
    yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService());
    yield 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService());
    yield 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService());
    yield 'api_platform.cache.route_name_resolver' => ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService());
    yield 'api_platform.cache.metadata.resource' => ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService());
    yield 'api_platform.cache.metadata.resource.legacy' => ($this->privates['api_platform.cache.metadata.resource.legacy'] ?? $this->getApiPlatform_Cache_Metadata_Resource_LegacyService());
    yield 'api_platform.cache.metadata.property.legacy' => ($this->privates['api_platform.cache.metadata.property.legacy'] ?? $this->getApiPlatform_Cache_Metadata_Property_LegacyService());
    yield 'api_platform.cache.subresource_operation_factory' => ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService());
    yield 'api_platform.cache.metadata.property' => ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService());
    yield 'api_platform.cache.metadata.resource_collection' => ($this->privates['api_platform.cache.metadata.resource_collection'] ?? $this->getApiPlatform_Cache_Metadata_ResourceCollectionService());
    yield 'api_platform.cache.identifiers_extractor' => ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService());
    yield 'prestashop.static_cache.adapter' => ($this->services['prestashop.static_cache.adapter'] ?? $this->getPrestashop_StaticCache_AdapterService());
}, 19));

$instance->setName('cache:pool:prune');

return $instance;
