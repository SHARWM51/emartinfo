<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:42
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__image_previewers/overrides/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258347352627b926eed4166-40806925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f99243b51a04585448f8e0fe718e53eb827dfa' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__image_previewers/overrides/common/previewer.tpl',
      1 => 1652264383,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '258347352627b926eed4166-40806925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926eed8855_36950102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926eed8855_36950102')) {function content_627b926eed8855_36950102($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><!--override with ab__image_previewers-->
<?php if (fn_ab__ip_is_ab_previewer()) {?>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__image_previewers/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>

<?php } else { ?>
<?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
