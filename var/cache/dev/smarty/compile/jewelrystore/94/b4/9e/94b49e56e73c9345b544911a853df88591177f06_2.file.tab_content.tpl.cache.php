<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:59
  from 'C:\wamp64\www\presta-tests\themes\jewelrystore\modules\ps_newproducts\views\templates\hook\tab_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65240633e6e885_88530793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94b49e56e73c9345b544911a853df88591177f06' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\jewelrystore\\modules\\ps_newproducts\\views\\templates\\hook\\tab_content.tpl',
      1 => 1696857771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 2,
  ),
),false)) {
function content_65240633e6e885_88530793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\presta-tests\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->compiled->nocache_hash = '78547698265240633e0ce92_50927900';
if ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value) {?>
    <div class='blocknewproducts' id='blocknewproducts' >
        <div class="products_tab <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value) <= 4) {?>no_action<?php }?>">
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value) <= 6) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <div class="group_blog_item">
                        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('is', 0);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['is']->value%2 == 0) {?>
                        <div class="group_blog_item">
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('is', $_smarty_tpl->tpl_vars['is']->value+1);?>
                    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php if ($_smarty_tpl->tpl_vars['is']->value%2 == 0) {?>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['is']->value%2 != 0) {?>
                    </div>
                <?php }?>
            <?php }?>
          
        </div>
    </div>
<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts">
	<li class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
</li>
</ul>
<?php }
}
}
