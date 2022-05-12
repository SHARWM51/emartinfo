<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:37:32
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135170091627b98f4ebe218-10521936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a775230ee4fca69419012194bab0e960653818b' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '135170091627b98f4ebe218-10521936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b98f4ec1629_35825709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98f4ec1629_35825709')) {function content_627b98f4ec1629_35825709($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }?><?php }} ?>
