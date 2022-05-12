<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:42:44
         compiled from "/home/emartinf/public_html/design/backend/templates/buttons/helpdesk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232338665627b9a2cd034e4-93595225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1c36000b9b574293d0a2c4b227cc88f32cff198' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/buttons/helpdesk.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '232338665627b9a2cd034e4-93595225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btn_text' => 0,
    'btn_href' => 0,
    'app' => 0,
    'btn_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9a2cd0b7e7_66822143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9a2cd0b7e7_66822143')) {function content_627b9a2cd0b7e7_66822143($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('helpdesk_account.sign_in'));
?>
<?php $_smarty_tpl->tpl_vars['btn_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['btn_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("helpdesk_account.sign_in") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['btn_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['btn_href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["helpdesk.connect_url"] : $tmp), null, 0);?>
<a class="btn btn-primary <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_class']->value, ENT_QUOTES, 'UTF-8');?>
"
   href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['btn_href']->value), ENT_QUOTES, 'UTF-8');?>
"
>
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 30 30"><g fill="#fff"><path d="M0 0h9.091v9.091H0zM10 10h9.091v9.091H10zM20.909 10H30v9.091h-9.091zM10 20.909h9.091V30H10zM20.909 20.909H30V30h-9.091z"/></g></svg>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_text']->value, ENT_QUOTES, 'UTF-8');?>

</a>
<?php }} ?>
