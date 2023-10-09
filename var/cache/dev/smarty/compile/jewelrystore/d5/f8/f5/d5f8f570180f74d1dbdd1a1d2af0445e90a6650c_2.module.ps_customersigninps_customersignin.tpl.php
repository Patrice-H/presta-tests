<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:56
  from 'module:ps_customersigninps_customersignin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6524063084bfb0_59970826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersigninps_customersignin.tpl',
      1 => 1696857771,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524063084bfb0_59970826 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\wamp64\www\presta-tests/themes/jewelrystore/modules/ps_customersignin/ps_customersignin.tpl --><div id="_desktop_user_info" class="_desktop_user_info">
    <span class="show_on"><i class="fa fa-user-o" aria-hidden="true"></i></span>
    <div class="toggle_user_mobile">
        <div class="user-info">
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>

                <a class="user-info-account" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['my_account_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" rel="nofollow" >
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hi, ','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer']->value['firstname'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 </span>
                </a>
                <a class="logout" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logout_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" >
                     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </a>

            <?php } else { ?>
                <a class="sign_in" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['my_account_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" rel="nofollow" >
                    <span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                </a>
                            <?php }?>
<!-- end C:\wamp64\www\presta-tests/themes/jewelrystore/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}
