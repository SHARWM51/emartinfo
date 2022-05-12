<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__category_banners/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:360411041627b926f83e842-38650105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e4673c9e5abda4f381704f317d6e2d27366416f' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__category_banners/hooks/index/scripts.post.tpl',
      1 => 1652264428,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '360411041627b926f83e842-38650105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f841517_37341468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f841517_37341468')) {function content_627b926f841517_37341468($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__cb.validator.wrong_time_format'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
_.tr({
ab__cb_wrong_time_format: '<?php echo strtr($_smarty_tpl->__("ab__cb.validator.wrong_time_format"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});
$(document).ready(function () {

$.ceFormValidator('registerValidator', {
class_name: 'cm-ab-cb-time',
message: _.tr('ab__cb_wrong_time_format'),
func: function (elm_id, elm) {
re = /^(\d{1,2}):(\d{2})?$/;
let elmVal = elm.val();
if (elmVal === '') {
return true;
}
if (regs = elmVal.match(re)) {
return regs[1] <= 23 && regs[2] <= 59;
}
return false;
}
});
});

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
