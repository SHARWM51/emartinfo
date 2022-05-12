<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:57
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303555611627ba759659607-40907666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd522ea2e15e053b2cc0daa50355ca206787564e' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '303555611627ba759659607-40907666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba75965b609_68696067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba75965b609_68696067')) {function content_627ba75965b609_68696067($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div><?php }} ?>
