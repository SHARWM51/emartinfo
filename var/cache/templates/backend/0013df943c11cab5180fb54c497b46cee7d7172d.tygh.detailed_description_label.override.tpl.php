<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:37:32
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/blog/hooks/pages/detailed_description_label.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1466096986627b98f4eab844-93004828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0013df943c11cab5180fb54c497b46cee7d7172d' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/blog/hooks/pages/detailed_description_label.override.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1466096986627b98f4eab844-93004828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b98f4eafb11_25083273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98f4eafb11_25083273')) {function content_627b98f4eafb11_25083273($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");?>
:</label>
<?php }?>
<?php }} ?>
