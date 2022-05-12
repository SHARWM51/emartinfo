<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:38:44
         compiled from "/home/emartinf/public_html/design/backend/templates/views/addons/components/manage/manage_adv_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:558843150627bb55cbf3120-49409232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05df38cdf564a296c7bf1b7128c056eac36d4d7c' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/addons/components/manage/manage_adv_buttons.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '558843150627bb55cbf3120-49409232',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb55cbf7306_95102590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb55cbf7306_95102590')) {function content_627bb55cbf7306_95102590($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('visit_marketplace'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url("helpdesk_connector.visit_marketplace"),'but_text'=>$_smarty_tpl->__("visit_marketplace"),'but_meta'=>"btn btn-primary",'but_role'=>"action",'but_target'=>"_blank"), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
