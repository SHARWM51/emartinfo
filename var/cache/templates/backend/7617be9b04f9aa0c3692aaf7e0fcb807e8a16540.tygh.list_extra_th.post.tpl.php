<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:41
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:469831810627b9f15719b33-76023283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7617be9b04f9aa0c3692aaf7e0fcb807e8a16540' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '469831810627b9f15719b33-76023283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'search' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f1571e846_33968363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f1571e846_33968363')) {function content_627b9f1571e846_33968363($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan_short'));
?>
<th width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=plan&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor_plans.plan_short");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="plan") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<?php }} ?>
