<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:47
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_communication/hooks/companies/tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1789689730627b9f1b408ef8-26999564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bb77f88e3c2083e5a1e9211856a1ce84b71b22e' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_communication/hooks/companies/tools_list.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1789689730627b9f1b408ef8-26999564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'id' => 0,
    'divider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f1b40eb61_18268945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f1b40eb61_18268945')) {function content_627b9f1b40eb61_18268945($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")) {?>
    <?php $_smarty_tpl->tpl_vars['divider'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['divider'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['id']->value,'menu_button'=>true,'divider'=>$_smarty_tpl->tpl_vars['divider']->value), 0);?>
<?php }} ?>
