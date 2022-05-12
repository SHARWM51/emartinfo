<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:42
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__stickers/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1742644927627b926e8cd677-41438047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa801b082d9eafca3cd10576b4e67871f6637c77' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__stickers/hooks/index/styles.post.tpl',
      1 => 1652264562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1742644927627b926e8cd677-41438047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926e8d4db9_01133429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926e8d4db9_01133429')) {function content_627b926e8d4db9_01133429($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.style.php';
?><?php echo smarty_function_style(array('src'=>"addons/ab__stickers/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"../../themes/responsive/css/addons/ab__stickers/styles.less"),$_smarty_tpl);?>

<?php  $_smarty_tpl->tpl_vars['appearance_style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['appearance_style']->_loop = false;
 $_from = fn_ab__stickers_sticker_get_ts_appearance_styles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['appearance_style']->key => $_smarty_tpl->tpl_vars['appearance_style']->value) {
$_smarty_tpl->tpl_vars['appearance_style']->_loop = true;
?>
<?php echo smarty_function_style(array('src'=>"../../themes/responsive/css/addons/ab__stickers/".((string)$_smarty_tpl->tpl_vars['appearance_style']->key)."_stickers.less"),$_smarty_tpl);?>

<?php } ?>
<?php $_smarty_tpl->tpl_vars['theme'] = new Smarty_variable("responsive", null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name']=="abt__unitheme2"||$_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name']=="abt__youpitheme") {?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value==$_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'], ENT_QUOTES, 'UTF-8');?>

<?php }?>
<?php echo smarty_function_style(array('src'=>"../../themes/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/css/addons/ab__stickers/theme.less"),$_smarty_tpl);?>
<?php }} ?>
