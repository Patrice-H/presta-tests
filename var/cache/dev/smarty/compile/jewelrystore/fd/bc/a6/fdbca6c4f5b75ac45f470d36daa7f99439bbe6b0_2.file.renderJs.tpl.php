<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:46
  from 'C:\wamp64\www\presta-tests\modules\ybc_productimagehover\views\templates\hook\renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65240626221ff2_58933037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdbca6c4f5b75ac45f470d36daa7f99439bbe6b0' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\modules\\ybc_productimagehover\\views\\templates\\hook\\renderJs.tpl',
      1 => 1696857765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65240626221ff2_58933037 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
 var baseAjax ='<?php if ((isset($_smarty_tpl->tpl_vars['_PI_VER_17_']->value)) && $_smarty_tpl->tpl_vars['_PI_VER_17_']->value) {
echo $_smarty_tpl->tpl_vars['baseAjax']->value;
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['baseAjax']->value, ENT_QUOTES, 'UTF-8');
}?>';
 var YBC_PI_TRANSITION_EFFECT = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['YBC_PI_TRANSITION_EFFECT']->value, ENT_QUOTES, 'UTF-8');?>
';
 var _PI_VER_17_ = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['_PI_VER_17_']->value )), ENT_QUOTES, 'UTF-8');?>

 var _PI_VER_16_ = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['_PI_VER_16_']->value )), ENT_QUOTES, 'UTF-8');?>

<?php echo '</script'; ?>
><?php }
}