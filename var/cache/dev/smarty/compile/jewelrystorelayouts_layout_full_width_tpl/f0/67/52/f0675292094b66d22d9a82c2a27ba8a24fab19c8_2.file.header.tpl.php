<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:55
  from 'C:\wamp64\www\presta-tests\themes\jewelrystore\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6524062f20ef50_79432079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0675292094b66d22d9a82c2a27ba8a24fab19c8' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\jewelrystore\\templates\\_partials\\header.tpl',
      1 => 1696857773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524062f20ef50_79432079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="header_content tonglao">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19307247826524062f1e4b63_35154845', 'header_top');
?>

</div>
<div class="slider">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLS'),$_smarty_tpl ) );?>

</div>

<?php }
/* {block 'header_top'} */
class Block_19307247826524062f1e4b63_35154845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_19307247826524062f1e4b63_35154845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

       
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="header_top_content"> 
                        <div class="pull-xs-left hidden-md-up text-xs-center mobile closed" id="menu-icon">
                            <i class="material-icons d-inline menu">menu</i>
                        </div>
                        <div class="col-sm-2 hidden-sm-down _desktop_logo" id="_desktop_logo">
                            <div class="wrap_logo">
                                <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['base_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                    <img class="logo img-responsive"
                                         src="<?php if ((isset($_smarty_tpl->tpl_vars['tc_dev_mode']->value)) && $_smarty_tpl->tpl_vars['tc_dev_mode']->value && (isset($_smarty_tpl->tpl_vars['logo_url']->value)) && $_smarty_tpl->tpl_vars['logo_url']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['logo'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
                                         alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                                </a>
                            </div>
                        </div>
                        <div class="box_menu col-sm-8">
                             <div class="menu_and_cattree">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegaMenu'),$_smarty_tpl ) );?>

                            </div>
                        </div>
                        <div class="top_right">
                             <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

                        </div>               
                    </div>
                </div>
            </div>
        </div>
         <div class="mobile_logo">
            <div class="" id="_mobile_logo">
                <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['base_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    <img class="logo img-responsive"
                         src="<?php if ((isset($_smarty_tpl->tpl_vars['tc_dev_mode']->value)) && $_smarty_tpl->tpl_vars['tc_dev_mode']->value && (isset($_smarty_tpl->tpl_vars['logo_url']->value)) && $_smarty_tpl->tpl_vars['logo_url']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['logo'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
                         alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                </a>
            </div>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'header_top'} */
}
