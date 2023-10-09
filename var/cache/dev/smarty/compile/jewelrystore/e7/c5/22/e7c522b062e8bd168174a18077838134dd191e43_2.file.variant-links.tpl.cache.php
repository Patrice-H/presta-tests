<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:55:00
  from 'C:\wamp64\www\presta-tests\themes\jewelrystore\templates\catalog\_partials\variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65240634630c61_19319270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7c522b062e8bd168174a18077838134dd191e43' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\jewelrystore\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1696857772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65240634630c61_19319270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1142956506652406345db9b9_11662465';
?>
<div class="variant-links">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
        <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['variant']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
           class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['variant']->value['type'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
           title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['variant']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['variant']->value['html_color_code'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['variant']->value['texture'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
           >
            <span class="sr-only"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['variant']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <span class="js-count count"></span>
</div>
<?php }
}
