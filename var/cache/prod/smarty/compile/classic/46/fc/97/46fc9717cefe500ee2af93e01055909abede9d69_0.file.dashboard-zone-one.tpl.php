<?php
/* Smarty version 4.2.1, created on 2024-02-27 19:59:32
  from 'E:\Projets\presta-tests\modules\ps_mbo\views\templates\hook\dashboard-zone-one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65de311432e942_18777336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46fc9717cefe500ee2af93e01055909abede9d69' => 
    array (
      0 => 'E:\\Projets\\presta-tests\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-one.tpl',
      1 => 1709058940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65de311432e942_18777336 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-tips-and-update-container'));
      });
    }
  } else {
    const renderTipsAndUpdate = window.mboCdc.renderDashboardTipsAndUpdate

    const dashboardTipsAndUpdateContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderTipsAndUpdate(dashboardTipsAndUpdateContext, '#cdc-tips-and-update-container')
  }
<?php echo '</script'; ?>
>

<section id="cdc-tips-and-update-container" class="cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
