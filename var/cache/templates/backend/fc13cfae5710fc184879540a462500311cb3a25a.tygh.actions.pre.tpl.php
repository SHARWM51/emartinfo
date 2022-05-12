<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__addons_manager/hooks/index/actions.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1493881216627b926f2823a8-96711498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc13cfae5710fc184879540a462500311cb3a25a' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__addons_manager/hooks/index/actions.pre.tpl',
      1 => 1652263095,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1493881216627b926f2823a8-96711498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f28c230_23350008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f28c230_23350008')) {function content_627b926f28c230_23350008($_smarty_tpl) {?><?php if (((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])=='addons.update'&&$_REQUEST['addon']&&preg_match('/^ab[t]?__/',$_REQUEST['addon'])) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__addons_manager/views/ab__am/components/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addon'=>$_REQUEST['addon']), 0);?>

<?php $_smarty_tpl->tpl_vars['adv_buttons'] = new Smarty_variable(trim(Smarty::$_smarty_vars['capture']['adv_buttons']), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['adv_buttons'] = clone $_smarty_tpl->tpl_vars['adv_buttons'];?>
<?php } elseif (((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])=='addons.manage'&&$_REQUEST['supplier']&&$_REQUEST['supplier']=='AlexBranding') {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__addons_manager/views/ab__am/components/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addon'=>'ab__addons_manager'), 0);?>

<?php $_smarty_tpl->tpl_vars['adv_buttons'] = new Smarty_variable(trim(Smarty::$_smarty_vars['capture']['adv_buttons']), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['adv_buttons'] = clone $_smarty_tpl->tpl_vars['adv_buttons'];?>
<?php }?><?php }} ?>
