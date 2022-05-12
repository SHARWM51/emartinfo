<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:00:53
         compiled from "/home/emartinf/public_html/design/backend/templates/views/storefronts/components/regions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767897211627bac7d5261f8-49256183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7106e41fdd52259c8edbc606b35de8f8661dc81b' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/storefronts/components/regions.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1767897211627bac7d5261f8-49256183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'selected_countries' => 0,
    'all_countries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bac7d52a071_24279759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bac7d52a071_24279759')) {function content_627bac7d52a071_24279759($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('countries'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[country_codes]" : $tmp), null, 0);?>

<input type="hidden"
       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
       value=""
/>

<?php echo $_smarty_tpl->getSubTemplate ("common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("countries"),'first_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'first_data'=>$_smarty_tpl->tpl_vars['selected_countries']->value,'second_name'=>"all_countries",'second_data'=>$_smarty_tpl->tpl_vars['all_countries']->value), 0);?>

<?php }} ?>
