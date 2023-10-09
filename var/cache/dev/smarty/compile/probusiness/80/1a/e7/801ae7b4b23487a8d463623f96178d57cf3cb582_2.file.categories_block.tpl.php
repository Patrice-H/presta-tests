<?php
/* Smarty version 4.3.1, created on 2023-10-09 17:04:00
  from 'C:\wamp64\www\presta-tests\modules\ybc_blog_free\views\templates\hook\categories_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65241660912936_82414311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '801ae7b4b23487a8d463623f96178d57cf3cb582' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\modules\\ybc_blog_free\\views\\templates\\hook\\categories_block.tpl',
      1 => 1696857764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65241660912936_82414311 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['categories']->value) {?>
    <div class="block ybc_block_categories <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_RTL_CLASS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <h4 class="title_blog title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog categories','mod'=>'ybc_blog_free'),$_smarty_tpl ) );?>
</h4>
        <div class="content_block block_content">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['cat']->value['id_category'] == $_smarty_tpl->tpl_vars['active']->value) {?>class="active"<?php }?>>
                        <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>    
    </div>
<?php }
}
}
