<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:02
         compiled from "/home/emartinf/public_html/design/backend/templates/common/theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:345013402627ba722ca6c75-44365564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99e9a250c6405f1661e9945acf52aa595f4b0388' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/common/theme_editor.tpl',
      1 => 1650021892,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '345013402627ba722ca6c75-44365564',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba722cca9d7_19688829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba722cca9d7_19688829')) {function content_627ba722cca9d7_19688829($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<div id="theme_editor">
<div class="theme-editor"></div>
<?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        query_string: encodeURIComponent('<?php echo strtr($_SERVER['QUERY_STRING'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor--></div>
<?php }} ?>
