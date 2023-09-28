<?php
/* Smarty version 4.3.1, created on 2023-09-28 18:09:25
  from 'C:\wamp64\www\presta-tests\themes\classic\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6515a535dca206_58366369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45bad48dda1448822a02626062ed6d9c232009ff' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\classic\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1678738694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/password-policy-template.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6515a535dca206_58366369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6803567836515a535d7bfd8_93647989', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15499033056515a535d865b3_68209062', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9526489416515a535d89dc1_17459507', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10119745066515a535d8d541_44762979', 'header');
?>

      </header>

      <section id="wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7479236666515a535d90b54_09840766', 'notifications');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7759807236515a535d95dc8_86403854', 'breadcrumb');
?>


          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12392426486515a535d99bb6_31102157', "left_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13846061706515a535da49c0_55325886', "content_wrapper");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19420156986515a535dacd28_39124653', "right_column");
?>

          </div>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer" class="js-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8540475216515a535db7593_48072440', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15777484876515a535dbf831_46520679', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4550496706515a535dc6777_69475384', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_6803567836515a535d7bfd8_93647989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_6803567836515a535d7bfd8_93647989',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_15499033056515a535d865b3_68209062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_15499033056515a535d865b3_68209062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_9526489416515a535d89dc1_17459507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_9526489416515a535d89dc1_17459507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_10119745066515a535d8d541_44762979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_10119745066515a535d8d541_44762979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_7479236666515a535d90b54_09840766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_7479236666515a535d90b54_09840766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_7759807236515a535d95dc8_86403854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_7759807236515a535d95dc8_86403854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_12392426486515a535d99bb6_31102157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_12392426486515a535d99bb6_31102157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="left-column" class="col-xs-12 col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_690968366515a535da7e09_30337890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_13846061706515a535da49c0_55325886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_13846061706515a535da49c0_55325886',
  ),
  'content' => 
  array (
    0 => 'Block_690968366515a535da7e09_30337890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="content-wrapper" class="js-content-wrapper left-column right-column col-md-4 col-lg-3">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_690968366515a535da7e09_30337890', "content", $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_19420156986515a535dacd28_39124653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_19420156986515a535dacd28_39124653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="right-column" class="col-xs-12 col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_8540475216515a535db7593_48072440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8540475216515a535db7593_48072440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_15777484876515a535dbf831_46520679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_15777484876515a535dbf831_46520679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/password-policy-template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_4550496706515a535dc6777_69475384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_4550496706515a535dc6777_69475384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
