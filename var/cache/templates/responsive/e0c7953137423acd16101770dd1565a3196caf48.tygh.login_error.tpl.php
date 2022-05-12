<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:50:55
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/hybrid_auth/views/auth/login_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1539800688627baa271daf79-31483570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c7953137423acd16101770dd1565a3196caf48' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/hybrid_auth/views/auth/login_error.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1539800688627baa271daf79-31483570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'redirect_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627baa272126b3_34210661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627baa272126b3_34210661')) {function content_627baa272126b3_34210661($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
 data-no-defer>
    var target_window = opener || window;

    <?php if ($_smarty_tpl->tpl_vars['redirect_url']->value) {?>
        var url = '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['redirect_url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
'.replace(/\&amp;/g, '&');
        target_window.location.href = url;
    <?php } else { ?>
        target_window.location.reload();
    <?php }?>

    if (opener) {
        window.close();
    }
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/views/auth/login_error.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/views/auth/login_error.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
 data-no-defer>
    var target_window = opener || window;

    <?php if ($_smarty_tpl->tpl_vars['redirect_url']->value) {?>
        var url = '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['redirect_url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
'.replace(/\&amp;/g, '&');
        target_window.location.href = url;
    <?php } else { ?>
        target_window.location.reload();
    <?php }?>

    if (opener) {
        window.close();
    }
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
