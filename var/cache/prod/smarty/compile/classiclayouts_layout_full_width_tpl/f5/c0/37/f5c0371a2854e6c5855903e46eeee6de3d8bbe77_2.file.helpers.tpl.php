<?php
/* Smarty version 4.3.1, created on 2023-09-29 22:55:01
  from 'C:\wamp64\www\presta-tests\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651739a50f0d57_25425481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5c0371a2854e6c5855903e46eeee6de3d8bbe77' => 
    array (
      0 => 'C:\\wamp64\\www\\presta-tests\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1678738694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651739a50f0d57_25425481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\presta-tests\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\f5\\c0\\37\\f5c0371a2854e6c5855903e46eeee6de3d8bbe77_2.file.helpers.tpl.php',
    'uid' => 'f5c0371a2854e6c5855903e46eeee6de3d8bbe77',
    'call_name' => 'smarty_template_function_renderLogo_1056031252651739a4ee8537_74508192',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1056031252651739a4ee8537_74508192 */
if (!function_exists('smarty_template_function_renderLogo_1056031252651739a4ee8537_74508192')) {
function smarty_template_function_renderLogo_1056031252651739a4ee8537_74508192(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1056031252651739a4ee8537_74508192 */
}
