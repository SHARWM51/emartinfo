<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:710532826627b926f294d33-76774941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fae2cb02eb5d0ab995ec5579c0f8887b4989cbb1' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions.pre.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '710532826627b926f294d33-76774941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'navigation_accordion' => 0,
    'show_last_viewed_items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f299825_45085029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f299825_45085029')) {function content_627b926f299825_45085029($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['navigation_accordion'] = new Smarty_variable($_smarty_tpl->tpl_vars['navigation_accordion']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['navigation_accordion'] = clone $_smarty_tpl->tpl_vars['navigation_accordion'];?>
    <?php $_smarty_tpl->tpl_vars['show_last_viewed_items'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_last_viewed_items']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_last_viewed_items'] = clone $_smarty_tpl->tpl_vars['show_last_viewed_items'];?>
<?php }?>
<?php }} ?>
