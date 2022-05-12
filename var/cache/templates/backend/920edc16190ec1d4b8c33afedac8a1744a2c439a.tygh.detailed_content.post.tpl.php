<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:08:07
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__motivation_block/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1475739166627ba01f833a15-24715417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '920edc16190ec1d4b8c33afedac8a1744a2c439a' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__motivation_block/hooks/categories/detailed_content.post.tpl',
      1 => 1652264443,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1475739166627ba01f833a15-24715417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'category_data' => 0,
    'params' => 0,
    'motivation_items' => 0,
    'hide_inputs' => 0,
    'motivation_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba01f846367_70083226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba01f846367_70083226')) {function content_627ba01f846367_70083226($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__motivation_block','name','status','status'));
?>
<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp7=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['display_attached_mb_items_on_cat_page']==$_tmp7&&fn_check_view_permissions("ab__motivation_block.manage","GET")) {?>
<?php $_smarty_tpl->tpl_vars['params'] = new Smarty_variable(array('category_ids'=>array($_smarty_tpl->tpl_vars['category_data']->value['category_id'])), null, 0);?>
<?php $_smarty_tpl->tpl_vars['motivation_items'] = new Smarty_variable(fn_ab__mb_get_motivation_items($_smarty_tpl->tpl_vars['params']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['motivation_items']->value[0]) {?>
<?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable(!fn_check_view_permissions("ab__motivation_block.manage","POST"), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__motivation_block"),'target'=>"#acc_addon_ab__motivation_block"), 0);?>

<p>
<?php echo $_smarty_tpl->__('ab__mb.admin.categories_update.description',array('[href]'=>fn_url("ab__motivation_block.manage&category_ids[]=".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),'[text]'=>$_smarty_tpl->__('ab__mb.admin.categories_update.description.tooltip',array('[href]'=>$_smarty_tpl->__('ab__mb.admin.categories_update.description.tooltip.link')))));?>

</p>
<div id="acc_addon_ab__motivation_block" class="collapsed in<?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?> cm-hide-inputs<?php }?>">
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive">
<thead>
<tr>
<th width="90%"><?php echo $_smarty_tpl->__("name");?>
</th>
<th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
</tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['motivation_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['motivation_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['motivation_items']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['motivation_item']->key => $_smarty_tpl->tpl_vars['motivation_item']->value) {
$_smarty_tpl->tpl_vars['motivation_item']->_loop = true;
?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['motivation_item']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
<td><a class="row-status" href="<?php echo htmlspecialchars(fn_url("ab__motivation_block.update?motivation_item_id=".((string)$_smarty_tpl->tpl_vars['motivation_item']->value['motivation_item_id'])), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['motivation_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></td>
<td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['motivation_item']->value['motivation_item_id'],'status'=>$_smarty_tpl->tpl_vars['motivation_item']->value['status'],'hidden'=>true,'object_id_name'=>"motivation_item_id",'table'=>"ab__mb_motivation_items",'popup_additional_class'=>"cm-no-hide-input dropleft",'non_editable'=>true), 0);?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
<?php }?>
<?php }?><?php }} ?>
