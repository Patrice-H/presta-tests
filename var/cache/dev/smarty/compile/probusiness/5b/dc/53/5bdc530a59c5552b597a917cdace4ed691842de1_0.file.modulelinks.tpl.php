<?php
/* Smarty version 4.3.1, created on 2023-10-09 17:06:01
  from 'C:\wamp64\www\presta-tests\modules\ybc_themeconfig\views\templates\hook\modulelinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652416d96d6a21_65302546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bdc530a59c5552b597a917cdace4ed691842de1' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\modules\\ybc_themeconfig\\views\\templates\\hook\\modulelinks.tpl',
      1 => 1696857767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652416d96d6a21_65302546 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['modules']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function(){
            var ybc_tc_links = '<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
if ($_smarty_tpl->tpl_vars['module']->value['installed']) {?><li <?php if ($_smarty_tpl->tpl_vars['module']->value['id'] == $_smarty_tpl->tpl_vars['active_module']->value) {?> class="active" <?php }?> id="ybc_tc_<?php echo $_smarty_tpl->tpl_vars['module']->value['id'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['link'];?>
"><?php echo addslashes($_smarty_tpl->tpl_vars['module']->value['name']);?>
</a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>';
            if($('#subtab-AdminYbcTC').length > 0)
            {
                $('#subtab-AdminYbcTC').after(ybc_tc_links);
            }
            else
            if($('#subtab-AdminPayment').length > 0)
            {
                $('#subtab-AdminPayment').after(ybc_tc_links);
            }
            else 
            if($('#subtab-AdminModules').length > 0)
            {
                $('#subtab-AdminModules').after(ybc_tc_links);
            }
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
