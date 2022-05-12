<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:37:19
         compiled from "/home/emartinf/public_html/design/backend/templates/buttons/save_changes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199339010627b98e745cdd3-16593429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0093dd0d12572ebb342ed17f9992430718bc5f7' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/buttons/save_changes.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '199339010627b98e745cdd3-16593429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b98e74604e3_22468474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98e74604e3_22468474')) {function content_627b98e74604e3_22468474($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save_changes'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save_changes"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
