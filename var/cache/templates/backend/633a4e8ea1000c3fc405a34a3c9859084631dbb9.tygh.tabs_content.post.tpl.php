<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:37:33
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/pages/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:881689722627b98f50d5aa3-90784906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '633a4e8ea1000c3fc405a34a3c9859084631dbb9' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/pages/tabs_content.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '881689722627b98f50d5aa3-90784906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b98f50d8978_56253903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98f50d8978_56253903')) {function content_627b98f50d8978_56253903($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=(defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
