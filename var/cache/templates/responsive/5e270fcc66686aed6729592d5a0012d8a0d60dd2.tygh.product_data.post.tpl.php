<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:28
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products/product_data.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1516249018627ba73cad03b1-42694808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e270fcc66686aed6729592d5a0012d8a0d60dd2' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products/product_data.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1516249018627ba73cad03b1-42694808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'obj_id' => 0,
    'details_page' => 0,
    'c_name' => 0,
    '_but_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73cadef65_29912652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73cadef65_29912652')) {function content_627ba73cadef65_29912652($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['c_name'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['details_page']->value&&strpos(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['c_name']->value],'checkout.add..')) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("ab__ip_cart_button_id", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['_but_id']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__image_previewers/hooks/products/product_data.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__image_previewers/hooks/products/product_data.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['c_name'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['details_page']->value&&strpos(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['c_name']->value],'checkout.add..')) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("ab__ip_cart_button_id", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['_but_id']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }
}?><?php }} ?>
