<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:55:02
  from 'C:\wamp64\www\presta-tests\modules\ybc_newsletter\views\templates\hook\popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652406364ad649_48584475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b11ea9f26387d475e0912b0b0796df561a57d4f' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\modules\\ybc_newsletter\\views\\templates\\hook\\popup.tpl',
      1 => 1696857765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652406364ad649_48584475 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value == 'ynpt1') {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TPL']->value)."/hook/template1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value == 'ynpt2') {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TPL']->value)."/hook/template2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value == 'ynpt3') {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TPL']->value)."/hook/template3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value == 'ynpt4') {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TPL']->value)."/hook/template4.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value == 'ynpt5') {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TPL']->value)."/hook/template5.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value == 'ynpt8') {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TPL']->value)."/hook/template6.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value == 'ynpt7') {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TPL']->value)."/hook/template7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } elseif ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value == 'ynpt6') {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TPL']->value)."/hook/template8.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value == 'ynpt9') {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TPL']->value)."/hook/template9.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>        
<?php }
echo '<script'; ?>
 type="text/javascript">
    var YBC_NEWSLETTER_POPUP_DELAY =<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_DELAY']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
    var YBC_NEWSLETTER_POPUP_TYPE_SHOW = 'ybc_type_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TYPE_SHOW']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    var YBC_NEWSLETTER_POPUP_TYPE_SHOW_PARENT = 'ybc_parent_type_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TYPE_SHOW']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    var YBC_NEWSLETTER_CLOSE_PERMANAL =<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_CLOSE_PERMANAL']->value )), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
><?php }
}
