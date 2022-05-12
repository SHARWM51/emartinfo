<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:13:59
         compiled from "/home/emartinf/public_html/design/backend/templates/buttons/clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1964912635627ba17fe63610-76768845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c46f80c85105e3baf876027fa08f5736068da940' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/buttons/clone_item.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1964912635627ba17fe63610-76768845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba17fe65442_22384124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba17fe65442_22384124')) {function content_627ba17fe65442_22384124($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone'));
?>
<a class="btn btn-clone" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("clone");?>
</a>&nbsp;<?php }} ?>
