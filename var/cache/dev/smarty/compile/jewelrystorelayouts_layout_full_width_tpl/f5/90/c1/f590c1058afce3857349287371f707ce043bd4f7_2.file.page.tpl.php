<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:52
  from 'C:\wamp64\www\presta-tests\themes\jewelrystore\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6524062ca9ac44_57220144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f590c1058afce3857349287371f707ce043bd4f7' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\jewelrystore\\templates\\page.tpl',
      1 => 1696857773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524062ca9ac44_57220144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16174468576524062ca87dd0_01771534', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_7947551126524062ca8a776_59902976 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h2><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h2>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2728040836524062ca890a7_77931767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7947551126524062ca8a776_59902976', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_11189695026524062ca91b70_34746369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1783700626524062ca93594_23995263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14288900466524062ca909e8_21563830 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11189695026524062ca91b70_34746369', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1783700626524062ca93594_23995263', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_13240635276524062ca978f7_73766174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14624907576524062ca95e46_42619984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13240635276524062ca978f7_73766174', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16174468576524062ca87dd0_01771534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16174468576524062ca87dd0_01771534',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2728040836524062ca890a7_77931767',
  ),
  'page_title' => 
  array (
    0 => 'Block_7947551126524062ca8a776_59902976',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14288900466524062ca909e8_21563830',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11189695026524062ca91b70_34746369',
  ),
  'page_content' => 
  array (
    0 => 'Block_1783700626524062ca93594_23995263',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14624907576524062ca95e46_42619984',
  ),
  'page_footer' => 
  array (
    0 => 'Block_13240635276524062ca978f7_73766174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2728040836524062ca890a7_77931767', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14288900466524062ca909e8_21563830', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14624907576524062ca95e46_42619984', 'page_footer_container', $this->tplIndex);
?>


  </div>

<?php
}
}
/* {/block 'content'} */
}
