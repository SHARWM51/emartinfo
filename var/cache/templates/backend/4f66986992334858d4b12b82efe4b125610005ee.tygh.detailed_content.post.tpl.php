<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:02:00
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/hybrid_auth/hooks/profiles/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:505244540627bacc0e53a79-64382994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f66986992334858d4b12b82efe4b125610005ee' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/hybrid_auth/hooks/profiles/detailed_content.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '505244540627bacc0e53a79-64382994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'providers_list' => 0,
    'provider_id' => 0,
    'linked_providers' => 0,
    'provider_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bacc0e599a5_01708849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bacc0e599a5_01708849')) {function content_627bacc0e599a5_01708849($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.link_provider'));
?>
<?php if ($_smarty_tpl->tpl_vars['providers_list']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("hybrid_auth.link_provider")), 0);?>


<div id="hybrid_providers">
<?php  $_smarty_tpl->tpl_vars['provider_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provider_data']->_loop = false;
 $_smarty_tpl->tpl_vars['provider_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['providers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->key => $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->_loop = true;
 $_smarty_tpl->tpl_vars['provider_id']->value = $_smarty_tpl->tpl_vars['provider_data']->key;
?>

    <span class="hybrid-auth-icon<?php if (!in_array($_smarty_tpl->tpl_vars['provider_id']->value,$_smarty_tpl->tpl_vars['linked_providers']->value)) {?> link-unlink-provider<?php }?>">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
" />
    </span>

<?php } ?>
<!--hybrid_providers--></div>
<?php }?><?php }} ?>
