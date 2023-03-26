<?php
/* Smarty version 4.2.1, created on 2023-03-26 23:27:27
  from 'C:\xampp\htdocs\presta\modules\ps_mbo\views\templates\hook\dashboard-zone-two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6420b8bfc88921_54048738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96300e9d60667752878aa6d1a40e733d7795474a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-two.tpl',
      1 => 1679078157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6420b8bfc88921_54048738 (Smarty_Internal_Template $_smarty_tpl) {
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
