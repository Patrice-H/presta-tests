<?php
/* Smarty version 4.3.1, created on 2023-09-28 16:31:10
  from 'C:\wamp64\www\presta-tests\admin172ec8o5ouznni116bw\themes\default\template\controllers\feature_value\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65158e2e62c471_69689990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f89a76f4fa20a8d3d6bfa3bb28f9eac4ca63d752' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\admin172ec8o5ouznni116bw\\themes\\default\\template\\controllers\\feature_value\\helpers\\form\\form.tpl',
      1 => 1689835102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65158e2e62c471_69689990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161793370865158e2e613ca6_09457990', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_161793370865158e2e613ca6_09457990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_161793370865158e2e613ca6_09457990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'value') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFeatureValueForm",'id_feature_value'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature_value']->value->id ))),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
