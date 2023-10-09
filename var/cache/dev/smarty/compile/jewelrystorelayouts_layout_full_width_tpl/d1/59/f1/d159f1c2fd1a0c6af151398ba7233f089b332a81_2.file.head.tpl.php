<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:54
  from 'C:\wamp64\www\presta-tests\themes\jewelrystore\templates\_partials\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6524062e1f0167_31606444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd159f1c2fd1a0c6af151398ba7233f089b332a81' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\jewelrystore\\templates\\_partials\\head.tpl',
      1 => 1696857773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6524062e1f0167_31606444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="link-id" content="47"/>
                        
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14092594746524062e1abca5_52071424', 'head_seo');
?>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['favicon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['favicon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
<?php echo '<script'; ?>
 type="text/javascript">
    var lang_chose = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Choose file",'d'=>"Shop.Theme.Actions"),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2017366496524062e1e2849_37962862', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8021644736524062e1e6dc0_29395912', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20126576106524062e1ed2f4_27588481', 'hook_header');
?>

<?php }
/* {block 'head_seo_title'} */
class Block_3338893596524062e1ad321_71225058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['meta']['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_1071595896524062e1b3287_66066290 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['meta']['description'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_20842534806524062e1b7d69_88189144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['meta']['keywords'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_14092594746524062e1abca5_52071424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_14092594746524062e1abca5_52071424',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_3338893596524062e1ad321_71225058',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_1071595896524062e1b3287_66066290',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_20842534806524062e1b7d69_88189144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3338893596524062e1ad321_71225058', 'head_seo_title', $this->tplIndex);
?>
</title>
  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1071595896524062e1b3287_66066290', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20842534806524062e1b7d69_88189144', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['meta']['robots'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['canonical'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
  <?php }
}
}
/* {/block 'head_seo'} */
/* {block 'stylesheets'} */
class Block_2017366496524062e1e2849_37962862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_2017366496524062e1e2849_37962862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_8021644736524062e1e6dc0_29395912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_8021644736524062e1e6dc0_29395912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_20126576106524062e1ed2f4_27588481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_20126576106524062e1ed2f4_27588481',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
}
