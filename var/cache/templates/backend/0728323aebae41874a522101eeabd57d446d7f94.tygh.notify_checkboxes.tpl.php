<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:13:47
         compiled from "/home/emartinf/public_html/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2107121367627b9363639939-99585066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0728323aebae41874a522101eeabd57d446d7f94' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2107121367627b9363639939-99585066',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b936363c360_21873571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b936363c360_21873571')) {function content_627b936363c360_21873571($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>


<?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0);?>
<?php }} ?>
