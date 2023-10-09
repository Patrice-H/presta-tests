<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:55:05
  from 'C:\wamp64\www\presta-tests\themes\jewelrystore\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65240639171890_96975724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09034758b86ffb5a846dcf2c70eab5578492f617' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\jewelrystore\\templates\\errors\\not-found.tpl',
      1 => 1696857772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65240639171890_96975724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8720532366524063916b880_39604499', 'search');
?>


  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

</section>
<?php }
/* {block 'search'} */
class Block_8720532366524063916b880_39604499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'search' => 
  array (
    0 => 'Block_8720532366524063916b880_39604499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'search'} */
}
