<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:42
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_data_premoderation/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2064558285627b926e8a32b4-08342641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26c0f4449b0d08c5e2845293daed0be10356b361' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_data_premoderation/hooks/index/styles.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2064558285627b926e8a32b4-08342641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926e8a5d82_78990581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926e8a5d82_78990581')) {function content_627b926e8a5d82_78990581($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.style.php';
?><?php echo smarty_function_style(array('src'=>"addons/vendor_data_premoderation/styles.less"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['addon']->value['addon']=="vendor_data_premoderation") {?>
    <?php echo smarty_function_style(array('src'=>"addons/vendor_data_premoderation/vendor_data_premoderation.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
