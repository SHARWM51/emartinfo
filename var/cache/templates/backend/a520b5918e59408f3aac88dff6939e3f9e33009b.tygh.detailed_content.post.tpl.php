<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:37:33
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1424839697627b98f502e598-50310307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a520b5918e59408f3aac88dff6939e3f9e33009b' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1424839697627b98f502e598-50310307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b98f5032f45_29100100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98f5032f45_29100100')) {function content_627b98f5032f45_29100100($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=(defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

    <?php }?>
<?php }?>
<?php }} ?>
