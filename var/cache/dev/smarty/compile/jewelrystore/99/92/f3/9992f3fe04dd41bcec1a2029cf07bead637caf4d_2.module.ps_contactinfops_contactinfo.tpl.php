<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:55:01
  from 'module:ps_contactinfops_contactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6524063553d5f0_01677689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfops_contactinfo.tpl',
      1 => 1696857770,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524063553d5f0_01677689 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\wamp64\www\presta-tests/themes/jewelrystore/modules/ps_contactinfo/ps_contactinfo.tpl --><div class="block-contact links wrapper col-xs-12 col-md-3">
    <h4 class="text-uppercase title-footer-block block-contact-title hidden-xs-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Us','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h4>
    
    <div class="title clearfix hidden-md-up" data-target="#contact_footer" data-toggle="collapse">
        <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Us','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">expand_more</i>
            <i class="material-icons remove">expand_less</i>
          </span>
        </span>
    </div>
    <div id="contact_footer" class="contactinfo_footer collapse">
      <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_ADDRESS'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_ADDRESS']) {?>
            <div>
                <i aria-hidden="true" class="icon_pin_alt"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_ADDRESS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

            </div>
      <?php } elseif (((isset($_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'])) && $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1']) || ((isset($_smarty_tpl->tpl_vars['contact_infos']->value['address']['address2'])) && $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address2'])) {?>
          <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1']) {?>
              <div>
                <i aria-hidden="true" class="icon_pin_alt"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address: [1]%address1%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%address1%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['address']['address2']) {?>
              <div>
                <i aria-hidden="true" class="icon_pin_alt"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address2: [1]%address2%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%address2%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['address']['address2']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </div>
          <?php }?>
      <?php } else { ?>
        <?php if ((isset($_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'])) && $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted']) {?>
            <div>
                <i aria-hidden="true" class="icon_pin_alt"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address: [1]%address%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%address%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </div>
        <?php }?>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_PHONE_LABEL'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_PHONE_LABEL']) {?>
        <div>
            <a href="tel:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_PHONE_CALL'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
              <i class="fa fa-phone"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone: ','d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl ) );
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_PHONE_LABEL'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

          </a>
        </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
        <div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['contact_infos']->value['fax'];?>

        </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
        <div>
            <a href="mailto:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contact_infos']->value['email'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <i aria-hidden="true" class="icon_mail_alt"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email: ','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contact_infos']->value['email'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

            </a>
        </div>
      <?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_SKYPE'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_SKYPE']) {?>
        <div>
            <a href="skype:live:<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_SKYPE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
?call">
                <i class="fa fa-skype"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Skype:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKCONTACTINFOS_SKYPE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

            </a>
        </div>
      <?php }?>
    </div>
</div><!-- end C:\wamp64\www\presta-tests/themes/jewelrystore/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}