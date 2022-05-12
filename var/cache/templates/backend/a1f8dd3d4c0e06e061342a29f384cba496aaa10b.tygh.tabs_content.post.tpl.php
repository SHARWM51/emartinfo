<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:06:47
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__fast_navigation/hooks/static_data/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:953556712627b9fcfe3bc47-93767452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1f8dd3d4c0e06e061342a29f384cba496aaa10b' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__fast_navigation/hooks/static_data/tabs_content.post.tpl',
      1 => 1652264457,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '953556712627b9fcfe3bc47-93767452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'static_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9fcfe537b3_51749707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9fcfe537b3_51749707')) {function content_627b9fcfe537b3_51749707($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/emartinf/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__fn.menu.icon','ab__fn.menu.use_origin_image','ab__fn.menu.use_origin_image.tooltip','ab__fn.menu.label.show','ab__fn.menu.label.show.tooltip','ab__fn.menu.label','ab__fn.menu.label_color','ab__fn.menu.label_background'));
?>
<?php if (fn_check_view_permissions("ab__fast_navigation.view")) {?>
<?php if ($_smarty_tpl->tpl_vars['static_data']->value['ab__fn_menu_status']=='Y') {?>
<div id="content_ab__fn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!fn_check_view_permissions("ab__hpd.manage")) {?> class="cm-hide-inputs"<?php }?>>
<fieldset>

<div class="control-group">
<label class="control-label"><?php echo $_smarty_tpl->__("ab__fn.menu.icon");?>
:</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"ab__fn_menu_icon",'image_object_type'=>"ab__fn_menu_icon",'image_key'=>$_smarty_tpl->tpl_vars['id']->value,'hide_titles'=>true,'no_detailed'=>true,'hide_alt'=>true,'image_pair'=>$_smarty_tpl->tpl_vars['static_data']->value['ab__fn_menu_icon']), 0);?>

</div>
</div>

<div class="control-group">
<label class="control-label" for="ab__fn_use_origin_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__fn.menu.use_origin_image");?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__fn.menu.use_origin_image.tooltip")), 0);?>
:
</label>
<div class="controls">
<input type="hidden" name="static_data[ab__fn_use_origin_image]" value="N" />
<input type="checkbox" id="ab__fn_use_origin_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[ab__fn_use_origin_image]" value="Y"<?php if ($_smarty_tpl->tpl_vars['static_data']->value['ab__fn_use_origin_image']=="Y") {?> checked="checked"<?php }?> class="checkbox" />
</div>
</div>

<div class="control-group">
<label for="ab__fn_label_text_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("ab__fn.menu.label.show");?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__fn.menu.label.show.tooltip")), 0);?>
:
</label>
<div class="controls">
<input type="hidden" name="static_data[ab__fn_label_show]" value="N" />
<input type="checkbox" id="ab__fn_use_origin_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[ab__fn_label_show]" value="Y"<?php if ($_smarty_tpl->tpl_vars['static_data']->value['ab__fn_label_show']=="Y") {?> checked="checked"<?php }?> class="checkbox" />
</div>
</div>

<div class="control-group">
<label for="ab__fn_label_text_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("ab__fn.menu.label");?>
:</label>
<div class="controls">
<input type="text" id="ab__fn_label_text_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="static_data[ab__fn_label_text]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_data']->value['ab__fn_label_text'], ENT_QUOTES, 'UTF-8');?>
" class="input-large main-input">
</div>
</div>

<div class="control-group">
<label for="ab__fn_label_color_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-color"><?php echo $_smarty_tpl->__("ab__fn.menu.label_color");?>
:</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"static_data[ab__fn_label_color]",'cp_id'=>"ab__fn_label_color_".((string)$_smarty_tpl->tpl_vars['id']->value),'cp_value'=>(($tmp = @smarty_modifier_replace($_smarty_tpl->tpl_vars['static_data']->value['ab__fn_label_color'],"transparent","#ffffff"))===null||$tmp==='' ? "#ffffff" : $tmp)), 0);?>

</div>
</div>

<div class="control-group">
<label for="ab__fn_label_background_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-color"><?php echo $_smarty_tpl->__("ab__fn.menu.label_background");?>
:</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("views/theme_editor/components/colorpicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cp_name'=>"static_data[ab__fn_label_background]",'cp_id'=>"ab__fn_label_background_".((string)$_smarty_tpl->tpl_vars['id']->value),'cp_value'=>(($tmp = @smarty_modifier_replace($_smarty_tpl->tpl_vars['static_data']->value['ab__fn_label_background'],"transparent","#222222"))===null||$tmp==='' ? "#222222" : $tmp)), 0);?>

</div>
</div>
</fieldset>
<!--content_ab__fn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php }?><?php }} ?>
