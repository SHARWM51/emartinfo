<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:29
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__motivation_block/overrides/addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:711399338627ba73d1673a3-95916977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '677eed76bb4e62ce4d2f5b2a39440da919fb0423' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__motivation_block/overrides/addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '711399338627ba73d1673a3-95916977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ab__motivation_items' => 0,
    'shipping_estimation_product_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73d174874_60607565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73d174874_60607565')) {function content_627ba73d174874_60607565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!fn_ab__mb_has_template($_smarty_tpl->tpl_vars['ab__motivation_items']->value,"addons/ab__motivation_block/blocks/components/item_templates/geo_maps.tpl")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('shipping_methods'=>null,'product_id'=>(($tmp = @$_smarty_tpl->tpl_vars['shipping_estimation_product_id']->value)===null||$tmp==='' ? null : $tmp)), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__motivation_block/overrides/addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__motivation_block/overrides/addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!fn_ab__mb_has_template($_smarty_tpl->tpl_vars['ab__motivation_items']->value,"addons/ab__motivation_block/blocks/components/item_templates/geo_maps.tpl")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('shipping_methods'=>null,'product_id'=>(($tmp = @$_smarty_tpl->tpl_vars['shipping_estimation_product_id']->value)===null||$tmp==='' ? null : $tmp)), 0);?>

<?php }
}?><?php }} ?>
