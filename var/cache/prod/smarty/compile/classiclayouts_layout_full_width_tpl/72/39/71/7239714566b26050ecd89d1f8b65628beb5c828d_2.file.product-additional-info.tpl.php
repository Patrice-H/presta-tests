<?php
/* Smarty version 4.3.1, created on 2023-09-29 23:46:01
  from 'C:\wamp64\www\presta-tests\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65174599288c82_07518951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7239714566b26050ecd89d1f8b65628beb5c828d' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1678738694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65174599288c82_07518951 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
