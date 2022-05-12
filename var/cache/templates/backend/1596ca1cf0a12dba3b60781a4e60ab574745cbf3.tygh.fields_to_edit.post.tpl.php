<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:07:49
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1606767864627ba00dcd9895-75610048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1596ca1cf0a12dba3b60781a4e60ab574745cbf3' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1606767864627ba00dcd9895-75610048',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba00dcdaf83_96651130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba00dcdaf83_96651130')) {function content_627ba00dcdaf83_96651130($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
