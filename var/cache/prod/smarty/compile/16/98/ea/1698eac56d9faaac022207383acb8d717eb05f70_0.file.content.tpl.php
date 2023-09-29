<?php
/* Smarty version 4.3.1, created on 2023-09-29 22:53:54
  from 'C:\wamp64\www\presta-tests\admin172ec8o5ouznni116bw\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651739622d52f9_58493106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1698eac56d9faaac022207383acb8d717eb05f70' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\admin172ec8o5ouznni116bw\\themes\\new-theme\\template\\content.tpl',
      1 => 1689835102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651739622d52f9_58493106 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
