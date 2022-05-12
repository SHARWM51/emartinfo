<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/index/content_top.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:496389407627b926f4a8c85-12825221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '181c9a4aa802268af84f53b735bd3f34888ca53f' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/index/content_top.pre.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '496389407627b926f4a8c85-12825221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'select_languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f4ad1f2_16603462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f4ad1f2_16603462')) {function content_627b926f4ad1f2_16603462($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['select_languages'] = new Smarty_variable($_smarty_tpl->tpl_vars['select_languages']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_languages'] = clone $_smarty_tpl->tpl_vars['select_languages'];?>
<?php }?>
<?php }} ?>
