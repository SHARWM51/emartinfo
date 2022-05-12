<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:49
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__motivation_block/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:437517133627b927551fd26-13085846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0df0300fa4a60d94b5f7700ad1a5c11517027d4f' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__motivation_block/hooks/index/scripts.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '437517133627b927551fd26-13085846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ab__motivation_items' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b927552cfe6_56848320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b927552cfe6_56848320')) {function content_627b927552cfe6_56848320($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?>
    <?php echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__mb: {addon_settings: {template_variant: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant'], ENT_QUOTES, 'UTF-8');?>
',save_element_state: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['save_element_state'], ENT_QUOTES, 'UTF-8');?>
',},}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php echo smarty_function_script(array('src'=>"js/addons/ab__motivation_block/func.js"),$_smarty_tpl);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__motivation_block/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__motivation_block/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?>
    <?php echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__mb: {addon_settings: {template_variant: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant'], ENT_QUOTES, 'UTF-8');?>
',save_element_state: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['save_element_state'], ENT_QUOTES, 'UTF-8');?>
',},}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php echo smarty_function_script(array('src'=>"js/addons/ab__motivation_block/func.js"),$_smarty_tpl);?>

<?php }
}?><?php }} ?>
