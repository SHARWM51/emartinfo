<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:28
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/hooks/ab__stickers/product_stickers_pre.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1621010968627ba73ca98c74-30412471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a501380cb053ad759cb37c851978c68a2e1fa094' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/hooks/ab__stickers/product_stickers_pre.override.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1621010968627ba73ca98c74-30412471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'ab__vg_videos' => 0,
    'addons' => 0,
    'is_vertical' => 0,
    'total_count' => 0,
    'settings' => 0,
    'th_size' => 0,
    'language_direction' => 0,
    'details_page' => 0,
    'gal_width' => 0,
    'left_or_right' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73cac9d98_38798168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73cac9d98_38798168')) {function content_627ba73cac9d98_38798168($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['ab__vg_videos'] = new Smarty_variable(fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);
$_smarty_tpl->tpl_vars['total_count'] = new Smarty_variable((smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])+smarty_modifier_count($_smarty_tpl->tpl_vars['ab__vg_videos']->value)+1), null, 0);
$_smarty_tpl->tpl_vars['is_vertical'] = new Smarty_variable((($_smarty_tpl->tpl_vars['runtime']->value['mode']!="quick_view")&&($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['vertical']==smarty_modifier_enum("YesNo::YES"))), null, 0);
$_smarty_tpl->tpl_vars["th_size"] = new Smarty_variable(min((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['th_size'])===null||$tmp==='' ? 35 : $tmp),100), null, 0);
if ($_smarty_tpl->tpl_vars['is_vertical']->value) {
if ($_smarty_tpl->tpl_vars['total_count']->value==0||$_smarty_tpl->tpl_vars['total_count']->value==1) {
$_smarty_tpl->tpl_vars['gal_width'] = new Smarty_variable(0, null, 0);
} elseif ($_smarty_tpl->tpl_vars['total_count']->value>=6&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']==smarty_modifier_enum("YesNo::NO")) {
$_smarty_tpl->tpl_vars['gal_width'] = new Smarty_variable(($_smarty_tpl->tpl_vars['th_size']->value*2+18+5), null, 0);
} else {
$_smarty_tpl->tpl_vars['gal_width'] = new Smarty_variable(($_smarty_tpl->tpl_vars['th_size']->value+12+5), null, 0);
}
} else {
$_smarty_tpl->tpl_vars['gal_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['th_size']->value+10, null, 0);
}
$_smarty_tpl->tpl_vars['left_or_right'] = new Smarty_variable("left", null, 0);
if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {
$_smarty_tpl->tpl_vars['left_or_right'] = new Smarty_variable("right", null, 0);
}
if ($_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['total_count']->value>1&&$_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?><!-- This wrapper was overrated by ab__video_gallery add-on --><div class="ab-stickers-wrapper" style="<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?>width:calc(100% - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px);<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['left_or_right']->value, ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px;bottom<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['left_or_right']->value, ENT_QUOTES, 'UTF-8');
}?>:0"><?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/ab__stickers/product_stickers_pre.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/hooks/ab__stickers/product_stickers_pre.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['ab__vg_videos'] = new Smarty_variable(fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);
$_smarty_tpl->tpl_vars['total_count'] = new Smarty_variable((smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])+smarty_modifier_count($_smarty_tpl->tpl_vars['ab__vg_videos']->value)+1), null, 0);
$_smarty_tpl->tpl_vars['is_vertical'] = new Smarty_variable((($_smarty_tpl->tpl_vars['runtime']->value['mode']!="quick_view")&&($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['vertical']==smarty_modifier_enum("YesNo::YES"))), null, 0);
$_smarty_tpl->tpl_vars["th_size"] = new Smarty_variable(min((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['th_size'])===null||$tmp==='' ? 35 : $tmp),100), null, 0);
if ($_smarty_tpl->tpl_vars['is_vertical']->value) {
if ($_smarty_tpl->tpl_vars['total_count']->value==0||$_smarty_tpl->tpl_vars['total_count']->value==1) {
$_smarty_tpl->tpl_vars['gal_width'] = new Smarty_variable(0, null, 0);
} elseif ($_smarty_tpl->tpl_vars['total_count']->value>=6&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']==smarty_modifier_enum("YesNo::NO")) {
$_smarty_tpl->tpl_vars['gal_width'] = new Smarty_variable(($_smarty_tpl->tpl_vars['th_size']->value*2+18+5), null, 0);
} else {
$_smarty_tpl->tpl_vars['gal_width'] = new Smarty_variable(($_smarty_tpl->tpl_vars['th_size']->value+12+5), null, 0);
}
} else {
$_smarty_tpl->tpl_vars['gal_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['th_size']->value+10, null, 0);
}
$_smarty_tpl->tpl_vars['left_or_right'] = new Smarty_variable("left", null, 0);
if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {
$_smarty_tpl->tpl_vars['left_or_right'] = new Smarty_variable("right", null, 0);
}
if ($_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['total_count']->value>1&&$_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?><!-- This wrapper was overrated by ab__video_gallery add-on --><div class="ab-stickers-wrapper" style="<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?>width:calc(100% - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px);<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['left_or_right']->value, ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px;bottom<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['left_or_right']->value, ENT_QUOTES, 'UTF-8');
}?>:0"><?php }
}?><?php }} ?>
