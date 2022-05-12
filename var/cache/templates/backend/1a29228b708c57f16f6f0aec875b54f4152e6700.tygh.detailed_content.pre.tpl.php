<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:08:07
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__fast_navigation/hooks/categories/detailed_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1260011546627ba01f7ff449-98152549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a29228b708c57f16f6f0aec875b54f4152e6700' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__fast_navigation/hooks/categories/detailed_content.pre.tpl',
      1 => 1652264457,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1260011546627ba01f7ff449-98152549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba01f817a63_77100344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba01f817a63_77100344')) {function content_627ba01f817a63_77100344($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/emartinf/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__fast_navigation','ab__fn.category.status','ab__fn.category.status.tooltip','ab__fn.category.use_origin_image','ab__fn.category.use_origin_image.tooltip','ab__fn.category.label.show','ab__fn.category.label.show.tooltip','ab__fn.category.label','ab__fn.category.label_color','ab__fn.category.label_background'));
?>
<?php if (fn_check_view_permissions("ab__fast_navigation.view")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__fast_navigation"),'target'=>"#acc_addon_ab__fast_navigation"), 0);?>

<div id="acc_addon_ab__fast_navigation" class="collapsed in<?php if (!fn_check_view_permissions("ab__hpd.manage")) {?> cm-hide-inputs<?php }?>">
<div class="control-group">
<label class="control-label" for="ab__fn_category_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__fn.category.status");?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__fn.category.status.tooltip")), 0);?>
:
</label>
<div class="controls">
<input type="hidden" name="category_data[ab__fn_category_status]" value="N" />
<input type="checkbox" id="ab__fn_category_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="category_data[ab__fn_category_status]" value="Y" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__fn_category_status']=="Y") {?>checked="checked"<?php }?> />
</div>
</div>

<div class="control-group">
<label class="control-label" for="ab__fn_use_origin_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__fn.category.use_origin_image");?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__fn.category.use_origin_image.tooltip")), 0);?>
:
</label>
<div class="controls">
<input type="hidden" name="category_data[ab__fn_use_origin_image]" value="N" />
<input type="checkbox" id="ab__fn_use_origin_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="category_data[ab__fn_use_origin_image]" value="Y" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__fn_use_origin_image']=="Y") {?>checked="checked"<?php }?> class="checkbox" />
</div>
</div>

<div class="control-group">
<label for="ab__fn_label_text_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("ab__fn.category.label.show");?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__fn.category.label.show.tooltip")), 0);?>
:
</label>
<div class="controls">
<input type="hidden" name="category_data[ab__fn_label_show]" value="N" />
<input type="checkbox" id="ab__fn_use_origin_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="category_data[ab__fn_label_show]" value="Y" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['ab__fn_label_show']=="Y") {?>checked="checked"<?php }?> class="checkbox" />
</div>
</div>

<div class="control-group">
<label for="ab__fn_label_text_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("ab__fn.category.label");?>
:</label>
<div class="controls">
<input type="text" id="ab__fn_label_text_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="category_data[ab__fn_label_text]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['ab__fn_label_text'], ENT_QUOTES, 'UTF-8');?>
" class="input-large main-input">
</div>
</div>

<div class="control-group">
<label for="ab__fn_label_color_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-color"><?php echo $_smarty_tpl->__("ab__fn.category.label_color");?>
:</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"category_data[ab__fn_label_color]",'cp_id'=>"ab__fn_label_color_".((string)$_smarty_tpl->tpl_vars['id']->value),'cp_value'=>(($tmp = @smarty_modifier_replace($_smarty_tpl->tpl_vars['category_data']->value['ab__fn_label_color'],"transparent","#ffffff"))===null||$tmp==='' ? "#ffffff" : $tmp)), 0);?>

</div>
</div>

<div class="control-group">
<label for="ab__fn_label_background_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-color"><?php echo $_smarty_tpl->__("ab__fn.category.label_background");?>
:</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"category_data[ab__fn_label_background]",'cp_id'=>"ab__fn_label_background_".((string)$_smarty_tpl->tpl_vars['id']->value),'cp_value'=>(($tmp = @smarty_modifier_replace($_smarty_tpl->tpl_vars['category_data']->value['ab__fn_label_background'],"transparent","#222222"))===null||$tmp==='' ? "#222222" : $tmp)), 0);?>

</div>
</div>
</div>
<?php }?><?php }} ?>
