<?php
/* Smarty version 4.3.1, created on 2023-09-28 16:32:18
  from 'C:\wamp64\www\presta-tests\admin172ec8o5ouznni116bw\themes\default\template\controllers\attributes_groups\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65158e72b7a7e0_87257212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8cab8d7b04c1f6421cd731a3dc8925a3322275c' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\admin172ec8o5ouznni116bw\\themes\\default\\template\\controllers\\attributes_groups\\helpers\\form\\form.tpl',
      1 => 1689835102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65158e72b7a7e0_87257212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173020918765158e72b637e3_52922469', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_173020918765158e72b637e3_52922469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_173020918765158e72b637e3_52922469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'public_name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAttributeGroupForm",'id_attribute_group'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
