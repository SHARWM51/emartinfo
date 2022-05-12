<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:13:47
         compiled from "/home/emartinf/public_html/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2113355870627b9363803410-62401805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4caa82a585c90abe3a663268c9d876ab66d5176e' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/buttons/search.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2113355870627b9363803410-62401805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b93638068b2_28796821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b93638068b2_28796821')) {function content_627b93638068b2_28796821($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_button'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("admin_search_button"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value), 0);?>
<?php }} ?>
