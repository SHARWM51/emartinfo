<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:13:59
         compiled from "/home/emartinf/public_html/design/backend/templates/buttons/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:836013902627ba17fe75797-76614303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9007680b686cc77ead0a91d0d132158d31143071' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/buttons/create.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '836013902627ba17fe75797-76614303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_text' => 0,
    '_but_text' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba17fe79f28_81867894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba17fe79f28_81867894')) {function content_627ba17fe79f28_81867894($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('create'));
?>
<?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
	<?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->tpl_vars['but_text']->value, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->__("create"), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
