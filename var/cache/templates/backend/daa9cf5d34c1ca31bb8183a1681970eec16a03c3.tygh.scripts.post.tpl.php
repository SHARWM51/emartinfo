<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__scroll_to_top/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:640639341627b926f844919-10747766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daa9cf5d34c1ca31bb8183a1681970eec16a03c3' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__scroll_to_top/hooks/index/scripts.post.tpl',
      1 => 1652264518,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '640639341627b926f844919-10747766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f84b4c4_11377579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f84b4c4_11377579')) {function content_627b926f84b4c4_11377579($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['show_in_admin_panel'])===null||$tmp==='' ? "N" : $tmp)=="Y") {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
$.extend(_, {
ab__stt: {
settings: <?php echo json_encode($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']);?>
,
units: '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['units'])===null||$tmp==='' ? 'px' : $tmp), ENT_QUOTES, 'UTF-8');?>
',
transition: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['transition'])===null||$tmp==='' ? 600 : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
}
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/addons/ab__scroll_to_top/common.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
