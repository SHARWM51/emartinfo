<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:06:47
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__fast_navigation/hooks/static_data/tabs_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:939833848627b9fcfc83926-74797034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f17d7112504302e00ba8c0d05d6ca1bb2c9f084' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__fast_navigation/hooks/static_data/tabs_list.post.tpl',
      1 => 1652264457,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '939833848627b9fcfc83926-74797034',
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
  'unifunc' => 'content_627b9fcfc88733_46840128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9fcfc88733_46840128')) {function content_627b9fcfc88733_46840128($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__fast_navigation'));
?>
<?php if (fn_check_view_permissions("ab__fast_navigation.view")) {?>
<?php if ($_smarty_tpl->tpl_vars['static_data']->value['ab__fn_menu_status']=='Y') {?><li id="ab__fn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("ab__fast_navigation");?>
</a></li><?php }?>
<?php }?><?php }} ?>
