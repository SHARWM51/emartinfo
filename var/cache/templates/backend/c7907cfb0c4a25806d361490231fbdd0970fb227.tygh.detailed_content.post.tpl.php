<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:08:07
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__search_motivation/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:329975502627ba01f829c16-70191935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7907cfb0c4a25806d361490231fbdd0970fb227' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__search_motivation/hooks/categories/detailed_content.post.tpl',
      1 => 1652264531,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '329975502627ba01f829c16-70191935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba01f82efc7_63283213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba01f82efc7_63283213')) {function content_627ba01f82efc7_63283213($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__search_motivation','ab__search_motivation.search_phrases'));
?>
<?php if (fn_check_view_permissions("ab__search_motivation.view","GET")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__search_motivation"),'target'=>"#ab__search_phrases"), 0);?>

<fieldset>
<div id="ab__search_phrases" class="in collapse <?php if (!fn_check_view_permissions("ab__search_motivation.update","POST")) {?>cm-hide-inputs<?php }?>">
<div class="control-group">
<label class="control-label" for="elm_category_search_phrases"><?php echo $_smarty_tpl->__("ab__search_motivation.search_phrases");?>
:</label>
<div class="controls">
<textarea name="category_data[search_phrases]" id="elm_category_search_phrases" cols="55" rows="4" class="input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['search_phrases'], ENT_QUOTES, 'UTF-8');?>
</textarea>
</div>
</div>
</div>
</fieldset>
<?php }?><?php }} ?>
