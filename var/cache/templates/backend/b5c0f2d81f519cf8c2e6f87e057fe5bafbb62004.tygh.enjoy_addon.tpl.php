<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:39:44
         compiled from "/home/emartinf/public_html/design/backend/templates/views/addons/components/detailed_page/sidebar/enjoy_addon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1653211512627bb59853e891-64338454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5c0f2d81f519cf8c2e6f87e057fe5bafbb62004' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/addons/components/detailed_page/sidebar/enjoy_addon.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1653211512627bb59853e891-64338454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'personal_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb598541ca1_24711462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb598541ca1_24711462')) {function content_627bb598541ca1_24711462($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon']&&$_smarty_tpl->tpl_vars['addon']->value['identified']&&!$_smarty_tpl->tpl_vars['personal_review']->value) {?>
    <div class="sidebar-row marketplace">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"addons_write_review_sidebar"), 0);?>

    </div>
<?php }?>
<?php }} ?>
