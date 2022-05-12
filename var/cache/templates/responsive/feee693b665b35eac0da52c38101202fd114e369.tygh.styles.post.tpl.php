<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:48
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:970556981627b92743943e9-98099257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feee693b665b35eac0da52c38101202fd114e369' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/index/styles.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '970556981627b92743943e9-98099257',
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
  'unifunc' => 'content_627b92743a3896_06194245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b92743a3896_06194245')) {function content_627b92743a3896_06194245($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_style(array('src'=>"addons/ab__stickers/styles.less"),$_smarty_tpl);?>

<?php  $_smarty_tpl->tpl_vars['appearance_style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['appearance_style']->_loop = false;
 $_from = fn_ab__stickers_sticker_get_ts_appearance_styles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['appearance_style']->key => $_smarty_tpl->tpl_vars['appearance_style']->value) {
$_smarty_tpl->tpl_vars['appearance_style']->_loop = true;
?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__stickers/".((string)$_smarty_tpl->tpl_vars['appearance_style']->key)."_stickers.less"),$_smarty_tpl);?>

<?php } ?>
<?php echo smarty_function_style(array('src'=>"addons/ab__stickers/theme.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__stickers/rtl.less"),$_smarty_tpl);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_style(array('src'=>"addons/ab__stickers/styles.less"),$_smarty_tpl);?>

<?php  $_smarty_tpl->tpl_vars['appearance_style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['appearance_style']->_loop = false;
 $_from = fn_ab__stickers_sticker_get_ts_appearance_styles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['appearance_style']->key => $_smarty_tpl->tpl_vars['appearance_style']->value) {
$_smarty_tpl->tpl_vars['appearance_style']->_loop = true;
?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__stickers/".((string)$_smarty_tpl->tpl_vars['appearance_style']->key)."_stickers.less"),$_smarty_tpl);?>

<?php } ?>
<?php echo smarty_function_style(array('src'=>"addons/ab__stickers/theme.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
    <?php echo smarty_function_style(array('src'=>"addons/ab__stickers/rtl.less"),$_smarty_tpl);?>

<?php }
}?><?php }} ?>
