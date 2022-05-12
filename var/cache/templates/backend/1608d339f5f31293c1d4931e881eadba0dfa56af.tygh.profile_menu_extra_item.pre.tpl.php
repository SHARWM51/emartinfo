<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/profile_menu_extra_item.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:247516976627b926f6a11b4-87541663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1608d339f5f31293c1d4931e881eadba0dfa56af' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/profile_menu_extra_item.pre.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '247516976627b926f6a11b4-87541663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f6a63a9_13926962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f6a63a9_13926962')) {function content_627b926f6a63a9_13926962($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_panel_configurator.seller_info'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php if (fn_check_view_permissions("companies.update","GET")) {?>  
        <li><a href="<?php echo htmlspecialchars(fn_url("companies.update&company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_panel_configurator.seller_info");?>
</a></li>
    <?php }?>
<?php }?><?php }} ?>
