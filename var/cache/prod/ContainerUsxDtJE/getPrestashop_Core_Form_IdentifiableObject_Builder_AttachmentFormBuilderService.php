<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.builder.attachment_form_builder' shared service.

return $this->services['prestashop.core.form.identifiable_object.builder.attachment_form_builder'] = ($this->services['prestashop.core.form.builder.form_builder_factory'] ?? $this->load('getPrestashop_Core_Form_Builder_FormBuilderFactoryService.php'))->create('PrestaShopBundle\\Form\\Admin\\Sell\\Attachment\\AttachmentType', ($this->services['prestashop.core.form.identifiable_object.data_provider.attachment_form_data_provider'] ?? $this->load('getPrestashop_Core_Form_IdentifiableObject_DataProvider_AttachmentFormDataProviderService.php')));