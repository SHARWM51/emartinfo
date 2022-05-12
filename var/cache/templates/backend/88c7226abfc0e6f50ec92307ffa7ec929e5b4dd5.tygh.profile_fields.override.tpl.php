<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:47
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:500881730627b9f1b24a164-31029091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c7226abfc0e6f50ec92307ffa7ec929e5b4dd5' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '500881730627b9f1b24a164-31029091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f1b24c951_87996180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f1b24c951_87996180')) {function content_627b9f1b24c951_87996180($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==(defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <!--hide vendor plan field in admin area-->
<?php }?>
<?php }} ?>
