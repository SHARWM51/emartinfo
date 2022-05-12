<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__video_gallery/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1556102044627b926f854e62-94830337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '237148383e31d1f4247bb97ab47269b81cd4afb2' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__video_gallery/hooks/index/scripts.post.tpl',
      1 => 1652264480,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1556102044627b926f854e62-94830337',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f856350_71662489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f856350_71662489')) {function content_627b926f856350_71662489($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
_.ab__vg = { };
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
