<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1499591038627b926f84ceb1-11188722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f397374a68e553e362220470dd677186467642b' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl',
      1 => 1652264671,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1499591038627b926f84ceb1-11188722',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f850230_21376162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f850230_21376162')) {function content_627b926f850230_21376162($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__dotd.error.use_schedule_is_on'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
Tygh.tr({
'ab__dotd.error.use_schedule_is_on' : '<?php echo strtr($_smarty_tpl->__("ab__dotd.error.use_schedule_is_on"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
'ab__dotd.schedule.table_header': '<?php echo strtr($_smarty_tpl->__('ab__dotd.schedule.table_header'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
