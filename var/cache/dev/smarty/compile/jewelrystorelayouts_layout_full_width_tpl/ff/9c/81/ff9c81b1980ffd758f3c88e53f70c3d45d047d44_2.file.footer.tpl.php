<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:55:01
  from 'C:\wamp64\www\presta-tests\themes\jewelrystore\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652406351ba588_37536422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9c81b1980ffd758f3c88e53f70c3d45d047d44' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\jewelrystore\\templates\\_partials\\footer.tpl',
      1 => 1696857773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652406351ba588_37536422 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="footer-container">
    <div class="footer_before">
      <div class="container">
          <div class="row_ct">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FOOTER_LOGO'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FOOTER_LOGO']) {?>
                <div class="footer_logo">
                    <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/config/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FOOTER_LOGO'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer logo','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer logo','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" />
                </div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_TEXT_WElCOME'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_TEXT_WElCOME']) {?>
                <div class="footer_text_welcome">
                    <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_TEXT_WElCOME'];?>

                </div>
             <?php }?>
          </div>
      </div>
  </div>
  <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO']) {?>
    <div class="payment_footer">
        <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/config/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" />
    </div>
<?php }?>
  <div class="container">
    <div class="row">
        <div class="footer_top">   
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

        </div>
    </div>
  </div>
  <div class="footer_bottom">
      <div class="container">
          <div class="row">
                <div class="col-md-6 col-xs-12 pull-right">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

              </div>
              <div class="col-md-6 col-xs-12 coppyright pull-left">
                  <div class="ybc_coppyright">
                     <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT'];?>

                     <?php }?>
                  </div>
              </div>
              
          </div>
      </div>
  </div>
  <div class="scroll_top"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TOP','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>
</div>
<?php }
}
