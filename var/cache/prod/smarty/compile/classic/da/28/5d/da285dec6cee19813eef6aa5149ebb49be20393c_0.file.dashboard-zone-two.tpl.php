<?php
/* Smarty version 4.2.1, created on 2024-02-27 19:59:40
  from 'E:\Projets\presta-tests\modules\ps_mbo\views\templates\hook\dashboard-zone-two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65de311c1eeaa5_20853437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da285dec6cee19813eef6aa5149ebb49be20393c' => 
    array (
      0 => 'E:\\Projets\\presta-tests\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-two.tpl',
      1 => 1709058940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65de311c1eeaa5_20853437 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-more-module-container'));
      });
    }
  } else {
    const renderMoreModule = window.mboCdc.renderDashboardMoreModule

    const context = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderMoreModule(context, '#cdc-more-module-container')
  }
<?php echo '</script'; ?>
>

<div class="row-margin-bottom cdc-container" id="cdc-more-module-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></div>
<?php }
}
