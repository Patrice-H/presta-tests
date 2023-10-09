<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:56
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652406307414d5_54473061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1696857771,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652406307414d5_54473061 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\wamp64\www\presta-tests/themes/jewelrystore/modules/ps_searchbar/ps_searchbar.tpl --><!-- Block search module TOP -->
<div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<span class="search_icon_toogle">
        <i class="fa fa-search" aria-hidden="true"></i></span>
    <form method="get" action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_string']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search...','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
		<button type="submit">
			<i class="fa fa-search" aria-hidden="true"></i>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<!-- end C:\wamp64\www\presta-tests/themes/jewelrystore/modules/ps_searchbar/ps_searchbar.tpl --><?php }
}
