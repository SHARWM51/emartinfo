<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:13:59
         compiled from "/home/emartinf/public_html/design/backend/templates/buttons/add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:883324793627ba17fe5dc73-87711946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccb5bd94f0e55c9070daafeb30f4a87a1ac7fb6d' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '883324793627ba17fe5dc73-87711946',
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
  'unifunc' => 'content_627ba17fe5fc21_47263715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba17fe5fc21_47263715')) {function content_627ba17fe5fc21_47263715($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="btn btn-add" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add");?>
</a>&nbsp;<?php }} ?>
