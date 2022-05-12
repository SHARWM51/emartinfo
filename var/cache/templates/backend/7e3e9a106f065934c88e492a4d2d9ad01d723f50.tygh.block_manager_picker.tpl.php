<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 06:48:37
         compiled from "/home/emartinf/public_html/design/backend/templates/views/products/components/picker/block_manager_picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12975388627c606d848323-56735886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3e9a106f065934c88e492a4d2d9ad01d723f50' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/products/components/picker/block_manager_picker.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12975388627c606d848323-56735886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_ids' => 0,
    'multiple' => 0,
    'view_mode' => 0,
    'show_positions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c606d868a39_98118352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c606d868a39_98118352')) {function content_627c606d868a39_98118352($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_ids'=>explode(",",$_smarty_tpl->tpl_vars['item_ids']->value),'multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'view_mode'=>$_smarty_tpl->tpl_vars['view_mode']->value,'show_positions'=>$_smarty_tpl->tpl_vars['show_positions']->value,'allow_clear'=>false,'for_current_storefront'=>true), 0);?>

<?php }} ?>
