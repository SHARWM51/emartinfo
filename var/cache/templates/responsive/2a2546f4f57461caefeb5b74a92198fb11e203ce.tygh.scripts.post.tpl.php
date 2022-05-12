<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:49
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:715951392627b927553fcb3-38745673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a2546f4f57461caefeb5b74a92198fb11e203ce' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/index/scripts.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '715951392627b927553fcb3-38745673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b927554d005_21854252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b927554d005_21854252')) {function content_627b927554d005_21854252($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
>(function (_, $) {$.extend(_, {ab__stickers: {timeouts: { },runtime: {controller_mode: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',caching: Boolean(<?php echo htmlspecialchars(fn_ab__stickers_sticker_is_cache_allowed(), ENT_QUOTES, 'UTF-8');?>
),cache_key: 'ab__stickers_<?php echo htmlspecialchars(fn_get_storage_data("cache_id"), ENT_QUOTES, 'UTF-8');?>
',},},});})(Tygh, Tygh.$);<?php echo '</script'; ?>
><?php echo smarty_function_script(array('src'=>"js/addons/ab__stickers/func.js"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
>(function (_, $) {$.extend(_, {ab__stickers: {timeouts: { },runtime: {controller_mode: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',caching: Boolean(<?php echo htmlspecialchars(fn_ab__stickers_sticker_is_cache_allowed(), ENT_QUOTES, 'UTF-8');?>
),cache_key: 'ab__stickers_<?php echo htmlspecialchars(fn_get_storage_data("cache_id"), ENT_QUOTES, 'UTF-8');?>
',},},});})(Tygh, Tygh.$);<?php echo '</script'; ?>
><?php echo smarty_function_script(array('src'=>"js/addons/ab__stickers/func.js"),$_smarty_tpl);
}?><?php }} ?>
