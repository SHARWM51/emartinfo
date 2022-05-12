<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:37:33
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/tags/hooks/pages/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1054084559627b98f509f153-63989102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6863d7762537bca600cb655deb1bcb2cd0060f84' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/tags/hooks/pages/tabs_content.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1054084559627b98f509f153-63989102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b98f50a4c15_80028795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98f50a4c15_80028795')) {function content_627b98f50a4c15_80028795($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['page_data']->value,'input_name'=>"page_data",'object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id']), 0);?>

    <?php }?>
<?php }?><?php }} ?>
