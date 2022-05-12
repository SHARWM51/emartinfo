<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:25:59
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_type_description.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1339846689627bb25f63ab91-20395410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e261d76e5ec2f0f0c6debd6ec31cd4c99598193d' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_type_description.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1339846689627bb25f63ab91-20395410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb25f63dc55_32542563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb25f63dc55_32542563')) {function content_627bb25f63dc55_32542563($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==(defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <?php echo $_smarty_tpl->__("vendor_plan");?>

<?php }?>
<?php }} ?>
