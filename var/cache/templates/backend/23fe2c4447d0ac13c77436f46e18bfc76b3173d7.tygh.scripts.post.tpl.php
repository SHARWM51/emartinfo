<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__stickers/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:398353379627b926f85cc91-74209147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23fe2c4447d0ac13c77436f46e18bfc76b3173d7' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__stickers/hooks/index/scripts.post.tpl',
      1 => 1652264562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '398353379627b926f85cc91-74209147',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f85ee63_27613003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f85ee63_27613003')) {function content_627b926f85ee63_27613003($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
$.extend(_, {
ab__stickers: {
functions: { },
}
});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/addons/ab__stickers/admin.js"),$_smarty_tpl);?>
<?php }} ?>
