<?php
/* Smarty version 4.3.1, created on 2023-10-09 17:04:00
  from 'C:\wamp64\www\presta-tests\modules\ybc_blog_free\views\templates\hook\search_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65241660a6f339_17178283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '263f598e84183bcf4189f3bce0aa074661aa2067' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\modules\\ybc_blog_free\\views\\templates\\hook\\search_block.tpl',
      1 => 1696857764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65241660a6f339_17178283 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block ybc_block_search <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_RTL_CLASS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <h4 class="title_blog title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Search','mod'=>'ybc_blog_free'),$_smarty_tpl ) );?>
</h4>
    <div class="content_block block_content">
        <form action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input class="form-control" type="text" name="blog_search" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type in key words...','mod'=>'ybc_blog_free'),$_smarty_tpl ) );?>
" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
            <input class="button" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'ybc_blog_free'),$_smarty_tpl ) );?>
" />
            <span class="icon_search"></span>
        </form>
    </div>
</div>
<?php }
}
