<?php
/* Smarty version 4.2.1, created on 2023-03-26 21:45:32
  from 'C:\xampp\htdocs\presta\themes\classic\templates\errors\maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6420a0dc1b2099_43573066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc42b7354070ce6a4883a0a5c9254ffb7a960089' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta\\themes\\classic\\templates\\errors\\maintenance.tpl',
      1 => 1679078700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6420a0dc1b2099_43573066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20967853386420a0dc1a3e84_60476244', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_header_logo'} */
class Block_17768577396420a0dc1a4e85_08955912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php
}
}
/* {/block 'page_header_logo'} */
/* {block 'hook_maintenance'} */
class Block_7912288776420a0dc1aa079_67922980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_title'} */
class Block_18322479146420a0dc1ab633_90334458 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_15243821396420a0dc1ab0f3_82412875 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18322479146420a0dc1ab633_90334458', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_10688606276420a0dc1a48c0_45999154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17768577396420a0dc1a4e85_08955912', 'page_header_logo', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7912288776420a0dc1aa079_67922980', 'hook_maintenance', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15243821396420a0dc1ab0f3_82412875', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_16355479366420a0dc1aff26_65948164 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6082889886420a0dc1af9a8_41245163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-maintenance">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16355479366420a0dc1aff26_65948164', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_19152266346420a0dc1b11d9_22925951 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20967853386420a0dc1a3e84_60476244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20967853386420a0dc1a3e84_60476244',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10688606276420a0dc1a48c0_45999154',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_17768577396420a0dc1a4e85_08955912',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_7912288776420a0dc1aa079_67922980',
  ),
  'page_header' => 
  array (
    0 => 'Block_15243821396420a0dc1ab0f3_82412875',
  ),
  'page_title' => 
  array (
    0 => 'Block_18322479146420a0dc1ab633_90334458',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6082889886420a0dc1af9a8_41245163',
  ),
  'page_content' => 
  array (
    0 => 'Block_16355479366420a0dc1aff26_65948164',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19152266346420a0dc1b11d9_22925951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10688606276420a0dc1a48c0_45999154', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6082889886420a0dc1af9a8_41245163', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19152266346420a0dc1b11d9_22925951', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
