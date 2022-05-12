<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:49
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1228811532627b92754f60a8-79372615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5013e1191c9aee4fe687339904acff2344380afe' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1228811532627b92754f60a8-79372615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b927550ac77_47703273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b927550ac77_47703273')) {function content_627b927550ac77_47703273($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__dotd.more','ab__dotd.less','ab__dotd.more','ab__dotd.less'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__dotd: {current_dispatch: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',current_promotion_id: <?php echo htmlspecialchars((($tmp = @$_REQUEST['promotion_id'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
,max_height: '<?php echo htmlspecialchars(strtr((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['max_height']))===null||$tmp==='' ? 250 : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',more: '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__dotd.more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',less: '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__dotd.less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',plural_formula: '<?php echo fn_ab__dotd_get_plural_rule();?>
',}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__deal_of_the_day/func.js"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__dotd: {current_dispatch: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',current_promotion_id: <?php echo htmlspecialchars((($tmp = @$_REQUEST['promotion_id'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
,max_height: '<?php echo htmlspecialchars(strtr((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['max_height']))===null||$tmp==='' ? 250 : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',more: '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__dotd.more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',less: '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__dotd.less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',plural_formula: '<?php echo fn_ab__dotd_get_plural_rule();?>
',}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__deal_of_the_day/func.js"),$_smarty_tpl);
}?><?php }} ?>
