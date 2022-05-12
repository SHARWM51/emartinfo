<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__motivation_block/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:650828183627b926f857958-85605729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bf847dcebcf3b60d5c7f4bfe7d6d1b3f041d300' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__motivation_block/hooks/index/scripts.post.tpl',
      1 => 1652264443,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '650828183627b926f857958-85605729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f8596e9_97809367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f8596e9_97809367')) {function content_627b926f8596e9_97809367($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='ab__motivation_block') {?>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__motivation_block/admin.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
