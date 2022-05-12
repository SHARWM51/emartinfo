<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:38:44
         compiled from "/home/emartinf/public_html/design/backend/templates/views/addons/components/addons/addon_supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:948770233627bb55c9f0db2-98723160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4366c0d8418965055d420b740f0f2cef0e9e7dd9' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/addons/components/addons/addon_supplier.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '948770233627bb55c9f0db2-98723160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb55c9f8f96_11156259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb55c9f8f96_11156259')) {function content_627bb55c9f8f96_11156259($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('verified_developer','addon_has_admin_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['supplier']) {?>
    <div class="addons-addon-supplier">
        <a href="<?php echo htmlspecialchars(fn_url("addons.manage&supplier=".((string)$_smarty_tpl->tpl_vars['a']->value['supplier'])), ENT_QUOTES, 'UTF-8');?>
" class="addons-addon-supplier__name row-status">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['identified']||$_smarty_tpl->tpl_vars['a']->value['is_core_addon']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ok addons-addon-supplier__identified addons-addon-supplier__identified--".((string)mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8')),'title'=>$_smarty_tpl->__("verified_developer")),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['personal_review']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comment addons-addon-supplier__has-admin-review",'title'=>$_smarty_tpl->__("addon_has_admin_review")),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php }?>
<?php }} ?>
