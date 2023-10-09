<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:55:01
  from 'module:ps_linklistviewstemplateshooklinkblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65240635ac9fb8_77632268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906548e89c8c6025457ddaeffb1980a0c743b872' => 
    array (
      0 => 'module:ps_linklistviewstemplateshooklinkblock.tpl',
      1 => 1696857771,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65240635ac9fb8_77632268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '156271320465240635a9ae76_35958084';
?>
<!-- begin C:\wamp64\www\presta-tests/themes/jewelrystore/modules/ps_linklist/views/templates/hook/linkblock.tpl --><div class="links link_list wrapper col-xs-12 col-md-3">
  <div class="row">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
$_smarty_tpl->tpl_vars['linkBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->do_else = false;
?>
    <div class="wrapper">
      <h3 class="h3 title-footer-block hidden-sm-down"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkBlock']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
      <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
      <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_expand_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
        <span class="h3"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkBlock']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">expand_more</i>
            <i class="material-icons remove">expand_less</i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_expand_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="collapse footer_link_list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
          <li>
            <a id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkBlock']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['description'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

            </a>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<!-- end C:\wamp64\www\presta-tests/themes/jewelrystore/modules/ps_linklist/views/templates/hook/linkblock.tpl --><?php }
}
