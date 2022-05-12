<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:23:26
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140835604627bb1c6861c54-06409138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ea1a9131b105a000f1e27b68168070e87793781' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '140835604627bb1c6861c54-06409138',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb1c68656d9_31692740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb1c68656d9_31692740')) {function content_627bb1c68656d9_31692740($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.refill_balance'));
?>
<?php ob_start();
echo $_smarty_tpl->__("vendor_debt_payout.refill_balance");
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"btn btn-primary cm-new-window",'form'=>"refill_balance",'dispatch'=>"dispatch[debt.refill_balance]",'text'=>$_tmp1));?>
<?php }} ?>
