<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 07:05:21
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/vendor_locations/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:348531841627c64590a81b5-07906214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bb1fcdfeecb18189ef4833a8cfdecebb4a682fc' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/vendor_locations/hooks/index/scripts.post.tpl',
      1 => 1652319310,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '348531841627c64590a81b5-07906214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'vendor_locations_geolocation' => 0,
    'vendor_locations_locality' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c64590c2928_57701648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c64590c2928_57701648')) {function content_627c64590c2928_57701648($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.to_json.php';
if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
>
    (function (_, $) {
        _.vendor_locations = {
            api_key: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['api_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            storage_key_geolocation: '<?php echo htmlspecialchars(strtr((defined('VENDOR_LOCATIONS_STORAGE_KEY_GEO_LOCATION') ? constant('VENDOR_LOCATIONS_STORAGE_KEY_GEO_LOCATION') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            storage_key_locality: '<?php echo htmlspecialchars(strtr((defined('VENDOR_LOCATIONS_STORAGE_KEY_LOCALITY') ? constant('VENDOR_LOCATIONS_STORAGE_KEY_LOCALITY') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            customer_geolocation: '<?php echo strtr(smarty_modifier_to_json($_smarty_tpl->tpl_vars['vendor_locations_geolocation']->value), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            customer_locality: '<?php echo strtr(smarty_modifier_to_json($_smarty_tpl->tpl_vars['vendor_locations_locality']->value), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        };
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geocomplete.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geolocate.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geomap.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/func.js"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_locations/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_locations/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
>
    (function (_, $) {
        _.vendor_locations = {
            api_key: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['api_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            storage_key_geolocation: '<?php echo htmlspecialchars(strtr((defined('VENDOR_LOCATIONS_STORAGE_KEY_GEO_LOCATION') ? constant('VENDOR_LOCATIONS_STORAGE_KEY_GEO_LOCATION') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            storage_key_locality: '<?php echo htmlspecialchars(strtr((defined('VENDOR_LOCATIONS_STORAGE_KEY_LOCALITY') ? constant('VENDOR_LOCATIONS_STORAGE_KEY_LOCALITY') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            customer_geolocation: '<?php echo strtr(smarty_modifier_to_json($_smarty_tpl->tpl_vars['vendor_locations_geolocation']->value), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            customer_locality: '<?php echo strtr(smarty_modifier_to_json($_smarty_tpl->tpl_vars['vendor_locations_locality']->value), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        };
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geocomplete.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geolocate.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geomap.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/func.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
