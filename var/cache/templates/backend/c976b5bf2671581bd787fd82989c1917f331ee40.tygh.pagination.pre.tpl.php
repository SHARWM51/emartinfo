<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:13:47
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/common/pagination.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:973376064627b936352c805-93510260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c976b5bf2671581bd787fd82989c1917f331ee40' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/common/pagination.pre.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '973376064627b936352c805-93510260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'show_pagination_open' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9363531321_13210052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9363531321_13210052')) {function content_627b9363531321_13210052($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['show_pagination_open'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_pagination_open']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_pagination_open'] = clone $_smarty_tpl->tpl_vars['show_pagination_open'];?>
<?php }?>
<?php }} ?>
