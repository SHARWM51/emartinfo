<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 12:50:16
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/abt__unitheme2/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1191116840627cb530170fa0-66801702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9148c61d8d2541d12b477810608fbac3e133a2c5' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/abt__unitheme2/hooks/index/scripts.post.tpl',
      1 => 1652340007,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1191116840627cb530170fa0-66801702',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627cb530180963_45122599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627cb530180963_45122599')) {function content_627cb530180963_45122599($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.disabled_because_of_core_error','abt__ut2.class_was_copied'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
_.tr({
'abt__ut2.disabled_because_of_core_error': '<?php echo strtr($_smarty_tpl->__("abt__ut2.disabled_because_of_core_error",array("[core_version]"=>(defined('PRODUCT_VERSION') ? constant('PRODUCT_VERSION') : null))), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
'abt__ut2.class_was_copied': '<?php echo strtr($_smarty_tpl->__("abt__ut2.class_was_copied"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_admin.js"),$_smarty_tpl);?>
<?php }} ?>
