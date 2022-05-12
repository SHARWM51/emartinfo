<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:53:51
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/hybrid_auth/components/redirect_url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1263749941627baad7be1f20-36683369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6258f1e42db7b236f8ab2c9e35eb26413471a534' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/hybrid_auth/components/redirect_url.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1263749941627baad7be1f20-36683369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'provider_data' => 0,
    'all_storefront_ids' => 0,
    'storefront_ids' => 0,
    'storefront_id' => 0,
    'protocol' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627baad7c11029_79578823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627baad7c11029_79578823')) {function content_627baad7c11029_79578823($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php $_smarty_tpl->tpl_vars['protocol'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']===smarty_modifier_enum("YesNo::YES") ? "https" : "http", null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['provider_data']->value['storefront_ids']) {?>
    <?php $_smarty_tpl->tpl_vars['storefront_ids'] = new Smarty_variable($_smarty_tpl->tpl_vars['provider_data']->value['storefront_ids'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['storefront_ids'] = new Smarty_variable($_smarty_tpl->tpl_vars['all_storefront_ids']->value, null, 0);?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storefront_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storefront_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storefront_id']->key => $_smarty_tpl->tpl_vars['storefront_id']->value) {
$_smarty_tpl->tpl_vars['storefront_id']->_loop = true;
?>
<div class="control-group">
    <?php echo $_smarty_tpl->getSubTemplate ("common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('widget_copy_code_text'=>fn_url("?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value),smarty_modifier_enum("SiteArea::STOREFRONT"),$_smarty_tpl->tpl_vars['protocol']->value)), 0);?>

</div>
<?php } ?>
<?php }} ?>
