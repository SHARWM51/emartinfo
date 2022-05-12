<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:37:33
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/pages/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:999579189627b98f5121e44-45515479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80322f203ce867933bc70be306ca56d2e4c39bc0' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/pages/tabs_extra.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '999579189627b98f5121e44-45515479',
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
  'unifunc' => 'content_627b98f5125738_04268141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98f5125738_04268141')) {function content_627b98f5125738_04268141($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=(defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
