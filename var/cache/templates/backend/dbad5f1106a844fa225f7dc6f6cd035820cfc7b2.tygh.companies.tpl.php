<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:00:53
         compiled from "/home/emartinf/public_html/design/backend/templates/views/storefronts/components/companies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1340327982627bac7d53e7a5-64986027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbad5f1106a844fa225f7dc6f6cd035820cfc7b2' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/storefronts/components/companies.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1340327982627bac7d53e7a5-64986027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'selected_companies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bac7d5424a7_53733905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bac7d5424a7_53733905')) {function content_627bac7d5424a7_53733905($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('all_companies'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[company_ids]" : $tmp), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_add_button'=>true,'multiple'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['selected_companies']->value,'view_mode'=>"list",'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'checkbox_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'no_item_text'=>$_smarty_tpl->__("all_companies")), 0);?>


<?php }} ?>
