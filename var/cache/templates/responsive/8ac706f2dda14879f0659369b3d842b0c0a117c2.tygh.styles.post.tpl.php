<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:48
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1867834922627b92743ada08-90477493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ac706f2dda14879f0659369b3d842b0c0a117c2' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/index/styles.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1867834922627b92743ada08-90477493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'language_direction' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b92743b85a8_55119258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b92743b85a8_55119258')) {function content_627b92743b85a8_55119258($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_style(array('src'=>"addons/ab__image_previewers/styles.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['language_direction']->value=='rtl') {?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__image_previewers/rtl.less"),$_smarty_tpl);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__image_previewers/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__image_previewers/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_style(array('src'=>"addons/ab__image_previewers/styles.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['language_direction']->value=='rtl') {?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__image_previewers/rtl.less"),$_smarty_tpl);?>

<?php }
}?><?php }} ?>
