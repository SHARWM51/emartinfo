<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 07:19:21
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/vendor_locations/blocks/companies_catalog/vendors_map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:377758921627c67a108afb3-36364480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10d0ee50a2926d24ad1653ee7e1f3aeaf6ddf250' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/vendor_locations/blocks/companies_catalog/vendors_map.tpl',
      1 => 1652319310,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '377758921627c67a108afb3-36364480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'item' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c67a10a0e41_67901715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c67a10a0e41_67901715')) {function content_627c67a10a0e41_67901715($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div id="vendors_map_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
    class="ty-vendor-locations__vendors-map"
    data-ca-vendor-locations="vendorsMap"
    data-ca-geomap-marker-selector=".cm-vendor-map-marker-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-geomap-max-zoom="15"
>
</div>
<div class="hidden">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="cm-vendor-map-marker-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geomap-marker-lat="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['lat'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geomap-marker-lng="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['lng'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geomap-marker-url="<?php echo strtr(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['item']->value['company_id'])), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
             data-ca-geomap-marker-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['company'], ENT_QUOTES, 'UTF-8');?>
"
        >
        </div>
    <?php } ?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_locations/blocks/companies_catalog/vendors_map.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_locations/blocks/companies_catalog/vendors_map.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div id="vendors_map_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
    class="ty-vendor-locations__vendors-map"
    data-ca-vendor-locations="vendorsMap"
    data-ca-geomap-marker-selector=".cm-vendor-map-marker-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-geomap-max-zoom="15"
>
</div>
<div class="hidden">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="cm-vendor-map-marker-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geomap-marker-lat="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['lat'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geomap-marker-lng="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['lng'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-geomap-marker-url="<?php echo strtr(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['item']->value['company_id'])), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
             data-ca-geomap-marker-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['company'], ENT_QUOTES, 'UTF-8');?>
"
        >
        </div>
    <?php } ?>
</div>
<?php }?><?php }} ?>
