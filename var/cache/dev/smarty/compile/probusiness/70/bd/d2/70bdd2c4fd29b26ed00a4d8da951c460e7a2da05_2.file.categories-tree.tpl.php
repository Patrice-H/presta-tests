<?php
/* Smarty version 4.3.1, created on 2023-10-09 17:03:59
  from 'C:\wamp64\www\presta-tests\modules\ets_megamenu\views\templates\hook\categories-tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6524165f6e97d2_11203097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70bdd2c4fd29b26ed00a4d8da951c460e7a2da05' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\modules\\ets_megamenu\\views\\templates\\hook\\categories-tree.tpl',
      1 => 1696857759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524165f6e97d2_11203097 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['categories']->value)) && $_smarty_tpl->tpl_vars['categories']->value) {?>
    <ul class="ets_mm_categories">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['sub'])) && $_smarty_tpl->tpl_vars['category']->value['sub']) {?>class="has-sub"<?php }?>>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getCategoryLink(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'] ))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['sub'])) && $_smarty_tpl->tpl_vars['category']->value['sub']) {
echo $_smarty_tpl->tpl_vars['category']->value['sub'];
}?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
