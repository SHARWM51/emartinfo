<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 07:04:04
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/rma/hooks/profiles/my_account_menu.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2090728764627c640cea72c7-96229050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56c7c02b09446386b923e5d68007180c7d13c6b9' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/rma/hooks/profiles/my_account_menu.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2090728764627c640cea72c7-96229050',
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
  'unifunc' => 'content_627c640ceb13d8_57098409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c640ceb13d8_57098409')) {function content_627c640ceb13d8_57098409($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('return_requests','return_requests'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><li class="ty-account-info__item ty-dropdown-box__item">
    <a href="<?php echo htmlspecialchars(fn_url("rma.returns"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-account-info__a"><?php echo $_smarty_tpl->__("return_requests");?>
</a>
</li><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rma/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rma/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><li class="ty-account-info__item ty-dropdown-box__item">
    <a href="<?php echo htmlspecialchars(fn_url("rma.returns"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-account-info__a"><?php echo $_smarty_tpl->__("return_requests");?>
</a>
</li><?php }?><?php }} ?>
