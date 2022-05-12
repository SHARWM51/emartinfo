<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:00:01
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/hybrid_auth/views/auth/loading.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279369907627bac49db9dc0-33762451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd95cb5172084616e5bfd5237f045ac1ffeceb272' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/hybrid_auth/views/auth/loading.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '279369907627bac49db9dc0-33762451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'images_dir' => 0,
    'provider' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bac49e01da5_14977580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bac49e01da5_14977580')) {function content_627bac49e01da5_14977580($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('loading','hybrid_auth.connecting_provider','loading','hybrid_auth.connecting_provider'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><table width="100%" border="0">
	<tr>
		<td align="center" height="190px" valign="middle"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/hybrid_auth/loading.gif" /></td>
	</tr>
	<tr>
		<td align="center"><br /><h3><?php echo $_smarty_tpl->__("loading");?>
...</h3><br /></td> 
	</tr>
	<tr>
		<td align="center">
			<?php echo $_smarty_tpl->__("hybrid_auth.connecting_provider",array("[provider]"=>$_smarty_tpl->tpl_vars['provider']->value));?>

		</td>
	</tr> 
</table>
<?php echo '<script'; ?>
 data-no-defer>
	setTimeout(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

		window.location.href = window.location.href + "&redirect_to_idp=Y";
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
, 1000);
<?php echo '</script'; ?>
><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/views/auth/loading.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/views/auth/loading.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><table width="100%" border="0">
	<tr>
		<td align="center" height="190px" valign="middle"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/hybrid_auth/loading.gif" /></td>
	</tr>
	<tr>
		<td align="center"><br /><h3><?php echo $_smarty_tpl->__("loading");?>
...</h3><br /></td> 
	</tr>
	<tr>
		<td align="center">
			<?php echo $_smarty_tpl->__("hybrid_auth.connecting_provider",array("[provider]"=>$_smarty_tpl->tpl_vars['provider']->value));?>

		</td>
	</tr> 
</table>
<?php echo '<script'; ?>
 data-no-defer>
	setTimeout(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

		window.location.href = window.location.href + "&redirect_to_idp=Y";
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
, 1000);
<?php echo '</script'; ?>
><?php }?><?php }} ?>
