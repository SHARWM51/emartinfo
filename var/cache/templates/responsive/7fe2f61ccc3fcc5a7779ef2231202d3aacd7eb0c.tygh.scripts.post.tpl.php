<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:49
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251486277627b92754b7c11-30932342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fe2f61ccc3fcc5a7779ef2231202d3aacd7eb0c' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/hooks/index/scripts.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '251486277627b92754b7c11-30932342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'current_dispatch' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b92754ea598_26558909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b92754ea598_26558909')) {function content_627b92754ea598_26558909($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__smc.more','ab__smc.less','ab__smc.more','ab__smc.less'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['current_dispatch'] = new Smarty_variable($_REQUEST['dispatch'], null, 0);?>
<?php echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__smc: {max_height: '<?php echo htmlspecialchars(strtr((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['max_height']))===null||$tmp==='' ? 250 : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',description_element_classes: "<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance']=="button") {?> ab-smc-button-set<?php }?>",additional_classes_for_parent: "<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['align']=="right") {?> ab-smc-right-text<?php }?>"<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['align']=="center") {?>+ " ab-smc-center-text"<?php }?>,additional_classes: "<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['custom_class'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance']=="button") {?>+ " ab-smc-button ty-btn__secondary ty-btn"<?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance']=="text2") {?>+ " ab-smc-text-2"<?php }?>,show_button: <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['show_button_after_action']=="Y") {?>true<?php } else { ?>false<?php }?>,transition: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['transition'])/1000, ENT_QUOTES, 'UTF-8');?>
,exclude: <?php echo json_encode(fn_get_schema("ab__hpd","excluded_selectors"));?>
,selector: "<?php echo htmlspecialchars(strtr((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['selectors'])===null||$tmp==='' ? ".ab-smc" : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['current_dispatch']->value=='products.view'&&$_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_product']=='Y') {?>+ ",.ty-product-block div.ty-wysiwyg-content[data-ab-smc-tab-hide]"<?php } elseif ($_smarty_tpl->tpl_vars['current_dispatch']->value=='product_features.view'&&$_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_brand']=='Y') {?>+ ",.ty-feature__description"<?php } elseif ($_smarty_tpl->tpl_vars['current_dispatch']->value=='categories.view'&&$_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_category']=='Y') {?>+ ",.ty-wysiwyg-content.ty-mb-s,.ty-wysiwyg-content.ty-mb-l"<?php }
if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name']=="abt__youpitheme") {?> + ",.abt-yt-hc,.ypi-popup-descr"<?php }?>,additional_selector: <?php echo json_encode(fn_get_schema("ab__hpd","included_selectors"));?>
}});_.tr({"ab__smc.more": '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__smc.more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',"ab__smc.less": '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__smc.less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__hide_product_description/ab__smc.js"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__hide_product_description/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__hide_product_description/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['current_dispatch'] = new Smarty_variable($_REQUEST['dispatch'], null, 0);?>
<?php echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__smc: {max_height: '<?php echo htmlspecialchars(strtr((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['max_height']))===null||$tmp==='' ? 250 : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',description_element_classes: "<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance']=="button") {?> ab-smc-button-set<?php }?>",additional_classes_for_parent: "<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['align']=="right") {?> ab-smc-right-text<?php }?>"<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['align']=="center") {?>+ " ab-smc-center-text"<?php }?>,additional_classes: "<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['custom_class'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance']=="button") {?>+ " ab-smc-button ty-btn__secondary ty-btn"<?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance']=="text2") {?>+ " ab-smc-text-2"<?php }?>,show_button: <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['show_button_after_action']=="Y") {?>true<?php } else { ?>false<?php }?>,transition: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['transition'])/1000, ENT_QUOTES, 'UTF-8');?>
,exclude: <?php echo json_encode(fn_get_schema("ab__hpd","excluded_selectors"));?>
,selector: "<?php echo htmlspecialchars(strtr((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['selectors'])===null||$tmp==='' ? ".ab-smc" : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['current_dispatch']->value=='products.view'&&$_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_product']=='Y') {?>+ ",.ty-product-block div.ty-wysiwyg-content[data-ab-smc-tab-hide]"<?php } elseif ($_smarty_tpl->tpl_vars['current_dispatch']->value=='product_features.view'&&$_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_brand']=='Y') {?>+ ",.ty-feature__description"<?php } elseif ($_smarty_tpl->tpl_vars['current_dispatch']->value=='categories.view'&&$_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_category']=='Y') {?>+ ",.ty-wysiwyg-content.ty-mb-s,.ty-wysiwyg-content.ty-mb-l"<?php }
if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name']=="abt__youpitheme") {?> + ",.abt-yt-hc,.ypi-popup-descr"<?php }?>,additional_selector: <?php echo json_encode(fn_get_schema("ab__hpd","included_selectors"));?>
}});_.tr({"ab__smc.more": '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__smc.more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',"ab__smc.less": '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__smc.less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__hide_product_description/ab__smc.js"),$_smarty_tpl);
}?><?php }} ?>
