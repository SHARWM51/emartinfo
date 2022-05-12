<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:06:47
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__fast_navigation/hooks/static_data_update/settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269551989627b9fcfe1d4e6-32431202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cc1710ae7ff21e777a0abdad00c42dd282a4bd0' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__fast_navigation/hooks/static_data_update/settings.post.tpl',
      1 => 1652264457,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '269551989627b9fcfe1d4e6-32431202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'static_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9fcfe23978_03391556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9fcfe23978_03391556')) {function content_627b9fcfe23978_03391556($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__fn.menu.status','ab__fn.menu.status.tooltip'));
?>
<?php if (fn_check_view_permissions("ab__fast_navigation.view")) {?>
<div class="control-group<?php if (!fn_check_view_permissions("ab__fast_navigation.manage")) {?> cm-hide-inputs<?php }?>">
<label class="control-label" for="ab__fn_menu_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__fn.menu.status");?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__fn.menu.status.tooltip")), 0);?>
:
</label>
<div class="controls">
<input type="hidden" name="static_data[ab__fn_menu_status]" value="N" />
<input type="checkbox" id="ab__fn_menu_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[ab__fn_menu_status]" value="Y"<?php if ($_smarty_tpl->tpl_vars['static_data']->value['ab__fn_menu_status']=="Y") {?> checked="checked"<?php }?> />
</div>
</div>
<?php }?><?php }} ?>
