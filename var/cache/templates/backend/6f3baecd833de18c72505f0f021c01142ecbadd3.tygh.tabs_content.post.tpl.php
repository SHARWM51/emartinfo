<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:47
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1952614519627b9f1b3a9328-88622531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f3baecd833de18c72505f0f021c01142ecbadd3' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/companies/tabs_content.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1952614519627b9f1b3a9328-88622531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f1b3ac189_65225666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f1b3ac189_65225666')) {function content_627b9f1b3ac189_65225666($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
