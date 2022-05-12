<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:08:07
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/categories/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1394013195627ba01f8770a0-57733984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72d65178e4aa1ea3851da8b555f332f0637251c0' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/categories/tabs_content.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1394013195627ba01f8770a0-57733984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba01f87a569_03525774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba01f87a569_03525774')) {function content_627ba01f87a569_03525774($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
