<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:46
  from 'C:\wamp64\www\presta-tests\modules\pleasewait\views\templates\hook\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65240626311203_45596816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cf1b118875bcc62d818b0a731224774e6a99d6c' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\modules\\pleasewait\\views\\templates\\hook\\header.tpl',
      1 => 1696857761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65240626311203_45596816 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['css']->value) {?>
<style><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</style>
<?php }
}
}
