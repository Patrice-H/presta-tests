<?php
/* Smarty version 4.3.1, created on 2023-10-09 15:54:58
  from 'C:\wamp64\www\presta-tests\themes\jewelrystore\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65240632088262_52747194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b80d4d953546ed9de0180b2b51e6fc887a6bd1' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\jewelrystore\\templates\\_partials\\breadcrumb.tpl',
      1 => 1696857773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65240632088262_52747194 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
<div class="breadcrumb_wrapper" data-depth="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['breadcrumb']->value['count'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <div class="container">
        <nav data-depth="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['breadcrumb']->value['count'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
          <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                  <span itemprop="name"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                </a>
                <meta itemprop="position" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
              </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'cart') {?>
                <li itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                      <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                  </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'contact') {?>
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'contact','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'my-account') {?>
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'order-confirmation') {?>
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Confirmation','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'manufacturer') {?>
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manufacturer','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
            <?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'new-products') {?>
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Products','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
            <?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'prices-drop') {?>
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On Sale','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
            <?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'best-sales') {?>
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sales','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
            <?php }?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'stores') {?>
                <li class="br_contact" itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our stores','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
            <?php }?>
          </ol>
        </nav>
    </div>
</div>
<?php }
}
}
