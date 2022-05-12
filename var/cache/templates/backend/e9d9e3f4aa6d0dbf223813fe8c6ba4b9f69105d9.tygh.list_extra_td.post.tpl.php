<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:41
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:621209662627b9f15731077-20061408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9d9e3f4aa6d0dbf223813fe8c6ba4b9f69105d9' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '621209662627b9f15731077-20061408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f15732516_99269808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f15732516_99269808')) {function content_627b9f15732516_99269808($_smarty_tpl) {?><td width="19%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['absolute_vendor_rating'], ENT_QUOTES, 'UTF-8');?>
</td>
<?php }} ?>
