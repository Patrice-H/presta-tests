<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:52
  from 'C:\wamp64\www\presta-tests\themes\jewelrystore\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6524062c742698_66367043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc67603f86a7b3bcf8113d3150b3b02ef22e2ee' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\jewelrystore\\templates\\index.tpl',
      1 => 1696857772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524062c742698_66367043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5036815056524062c72a7a9_58708169', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_18997182526524062c72bc12_18249365 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'widget_displayTopColumn'} */
class Block_342416596524062c72ea87_04321104 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'widget_displayTopColumn'} */
/* {block "section_tab"} */
class Block_8317603566524062c7322b1_85776080 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="entry_tab">
                    <div class="tabs" id="tabs">
                        <div class="tab_title">
                            <div class="wraper_title_section">
                                <h4 class="h1 products-section-title text-uppercase home_title_section">
                                    <span><?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_TITLE_SECTION_TABHOME'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_TITLE_SECTION_TABHOME']) {?>
                                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_TITLE_SECTION_TABHOME'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?></span>
                                </h4>
                                <div class="line_sub"><i class="fa fa-diamond" aria-hidden="true"></i></div>
                            </div>
                            <div class="title_tab">
                                <ul class="nav_title_tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeTab'),$_smarty_tpl ) );?>
</ul>
                            </div>
                        </div>
                        <div class="tab_content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeTabContent'),$_smarty_tpl ) );?>
</div>
                    </div>
                </div>
            <?php
}
}
/* {/block "section_tab"} */
/* {block 'page_content'} */
class Block_15235928226524062c72d8c7_20004597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_342416596524062c72ea87_04321104', 'widget_displayTopColumn', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8317603566524062c7322b1_85776080', "section_tab", $this->tplIndex);
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5036815056524062c72a7a9_58708169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_5036815056524062c72a7a9_58708169',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18997182526524062c72bc12_18249365',
  ),
  'page_content' => 
  array (
    0 => 'Block_15235928226524062c72d8c7_20004597',
  ),
  'widget_displayTopColumn' => 
  array (
    0 => 'Block_342416596524062c72ea87_04321104',
  ),
  'section_tab' => 
  array (
    0 => 'Block_8317603566524062c7322b1_85776080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18997182526524062c72bc12_18249365', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15235928226524062c72d8c7_20004597', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
