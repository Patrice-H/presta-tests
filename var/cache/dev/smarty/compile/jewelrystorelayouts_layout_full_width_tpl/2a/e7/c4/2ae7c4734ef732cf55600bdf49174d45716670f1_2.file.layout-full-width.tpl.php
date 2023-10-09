<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:52
  from 'C:\wamp64\www\presta-tests\themes\jewelrystore\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6524062cd065c5_14323844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae7c4734ef732cf55600bdf49174d45716670f1' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\jewelrystore\\templates\\layouts\\layout-full-width.tpl',
      1 => 1696857773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524062cd065c5_14323844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1182027896524062cceae50_55630428', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6959147406524062ccecba6_17287008', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21463629856524062ccee668_67379193', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_1182027896524062cceae50_55630428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1182027896524062cceae50_55630428',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_6959147406524062ccecba6_17287008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_6959147406524062ccecba6_17287008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_15800334246524062ccef778_18474880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_21463629856524062ccee668_67379193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_21463629856524062ccee668_67379193',
  ),
  'content' => 
  array (
    0 => 'Block_15800334246524062ccef778_18474880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15800334246524062ccef778_18474880', 'content', $this->tplIndex);
?>

        </div>
    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
