<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:42
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__motivation_block/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:974815059627b926e8c54e6-50036191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcbb5159a5a267f0b2758071d32e335ae3cec50b' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__motivation_block/hooks/index/styles.post.tpl',
      1 => 1652264443,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '974815059627b926e8c54e6-50036191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926e8c9be3_27517176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926e8c9be3_27517176')) {function content_627b926e8c9be3_27517176($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_modifier_in_array')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.in_array.php';
?><?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/responsive_icons.less"),$_smarty_tpl);?>

<?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'],array('abt__youpitheme'))) {?>
<?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/".((string)$_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'])."_icons.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
