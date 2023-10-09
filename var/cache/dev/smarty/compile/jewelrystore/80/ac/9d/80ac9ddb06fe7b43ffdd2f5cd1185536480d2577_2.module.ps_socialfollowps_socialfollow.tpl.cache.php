<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:55:02
  from 'module:ps_socialfollowps_socialfollow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65240636b819d9_64472973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollowps_socialfollow.tpl',
      1 => 1696857771,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65240636b819d9_64472973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '69068901565240636b6e4e3_77822584';
?>
<!-- begin C:\wamp64\www\presta-tests/themes/jewelrystore/modules/ps_socialfollow/ps_socialfollow.tpl --><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96367564065240636b70198_94174956', 'block_social');
?>

<!-- end C:\wamp64\www\presta-tests/themes/jewelrystore/modules/ps_socialfollow/ps_socialfollow.tpl --><?php }
/* {block 'block_social'} */
class Block_96367564065240636b70198_94174956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_96367564065240636b70198_94174956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-social">
    <div class="block_social_content">
        <span class="block_social_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Folow us:",'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
$_smarty_tpl->tpl_vars['social_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->do_else = false;
?>
            <li class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['social_link']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['social_link']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank"></a></li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
