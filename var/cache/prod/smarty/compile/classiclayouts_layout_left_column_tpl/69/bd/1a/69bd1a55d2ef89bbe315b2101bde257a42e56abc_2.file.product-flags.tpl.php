<?php
/* Smarty version 4.3.1, created on 2023-10-02 23:16:52
  from 'C:\wamp64\www\presta-tests\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651b334412d154_26112031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69bd1a55d2ef89bbe315b2101bde257a42e56abc' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1678738694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651b334412d154_26112031 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2126070522651b33441253a8_61415390', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_2126070522651b33441253a8_61415390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_2126070522651b33441253a8_61415390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}