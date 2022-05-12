<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:39:44
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__addons_manager/hooks/addons_detailed/manage_sidebar.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:358470274627bb598512306-19763035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f76e1aa26a2cbfd0bc31a934771970a64674f33' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__addons_manager/hooks/addons_detailed/manage_sidebar.pre.tpl',
      1 => 1652263164,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '358470274627bb598512306-19763035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb598515407_14070329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb598515407_14070329')) {function content_627bb598515407_14070329($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php if (preg_match('/^abt?__/',$_smarty_tpl->tpl_vars['addon']->value['addon'])) {?>
<style>
.control-group.sidebar__stats .text-warning {
display: none;
}
</style>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
$('.control-group.sidebar__stats').each(function () {
if ($(this).find('.text-warning').length){
$(this).addClass('hidden');
}
});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
