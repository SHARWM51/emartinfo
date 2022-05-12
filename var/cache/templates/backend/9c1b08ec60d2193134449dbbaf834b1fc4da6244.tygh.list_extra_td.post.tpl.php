<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:41
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178026427627b9f15733f28-02775584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c1b08ec60d2193134449dbbaf834b1fc4da6244' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '178026427627b9f15733f28-02775584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f15735036_15056400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f15735036_15056400')) {function content_627b9f15735036_15056400($_smarty_tpl) {?><td width="10%" class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</td><?php }} ?>
