<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:42
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/hidpi/hooks/common/image.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:472922570627b926eddc4d8-87732327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64c55c7f456e514381539dfb7d578cbcc1443fb5' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/hidpi/hooks/common/image.pre.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '472922570627b926eddc4d8-87732327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image_data' => 0,
    'image' => 0,
    'width' => 0,
    'height' => 0,
    'image_data2x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926ede8062_84497083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926ede8062_84497083')) {function content_627b926ede8062_84497083($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['image_data']->value['is_thumbnail']) {?>
    <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['width']*2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['height'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['height']*2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['image']->value['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image']->value['image_x'],$_smarty_tpl->tpl_vars['image']->value['image_y']), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_data'] = clone $_smarty_tpl->tpl_vars['image_data'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['image']->value['original_image_path']) {?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable($_smarty_tpl->tpl_vars['image']->value, null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('image_data2x', null, 0);
$_smarty_tpl->tpl_vars['image_data2x']->value["image_path"] = $_smarty_tpl->tpl_vars['image']->value['original_image_path'];?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['image_data2x']->value['image_path']) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('image_attributes', null, 1);
$_smarty_tpl->tpl_vars['image_attributes']->value["srcset"] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_attributes'] = clone $_smarty_tpl->tpl_vars['image_attributes'];?>
<?php }?>
<?php }} ?>
