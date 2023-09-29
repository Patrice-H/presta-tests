<?php
/* Smarty version 4.3.1, created on 2023-09-29 22:55:00
  from 'C:\wamp64\www\presta-tests\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651739a44f9da6_37232169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c6c88a08201ffbfe272d49e31bded10be45142f' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\classic\\templates\\page.tpl',
      1 => 1678738694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651739a44f9da6_37232169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2141578994651739a4444608_88968202', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_790997850651739a4446e84_29241309 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_600928081651739a4445860_80178839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_790997850651739a4446e84_29241309', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_951082621651739a44f1d94_35342658 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1700947422651739a44f3693_47584032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1761522783651739a44f0bd4_33659752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_951082621651739a44f1d94_35342658', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1700947422651739a44f3693_47584032', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1878623615651739a44f6fb9_66324644 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_591481780651739a44f5f20_13820988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1878623615651739a44f6fb9_66324644', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2141578994651739a4444608_88968202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2141578994651739a4444608_88968202',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_600928081651739a4445860_80178839',
  ),
  'page_title' => 
  array (
    0 => 'Block_790997850651739a4446e84_29241309',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1761522783651739a44f0bd4_33659752',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_951082621651739a44f1d94_35342658',
  ),
  'page_content' => 
  array (
    0 => 'Block_1700947422651739a44f3693_47584032',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_591481780651739a44f5f20_13820988',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1878623615651739a44f6fb9_66324644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_600928081651739a4445860_80178839', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1761522783651739a44f0bd4_33659752', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_591481780651739a44f5f20_13820988', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
