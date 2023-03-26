<?php
/* Smarty version 4.2.1, created on 2023-03-26 23:27:28
  from 'C:\xampp\htdocs\presta\admin524p678jkkufbfctsng\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6420b8c0908159_33998074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de54ea885cf06ee3131b05d94129b1eeb6fa3fff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\admin524p678jkkufbfctsng\\themes\\default\\template\\content.tpl',
      1 => 1679078935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6420b8c0908159_33998074 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
