<?php
/* Smarty version 4.2.1, created on 2024-02-27 19:59:41
  from 'E:\Projets\presta-tests\admin011bwfh8frhkvy2mszu\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65de311d869519_65827733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4572b8a17fcc8a1a6e4e8ca52e1da8c7d43e97fb' => 
    array (
      0 => 'E:\\Projets\\presta-tests\\admin011bwfh8frhkvy2mszu\\themes\\default\\template\\content.tpl',
      1 => 1709059114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65de311d869519_65827733 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
