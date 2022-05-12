<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:06:47
         compiled from "/home/emartinf/public_html/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:683457643627b9fcfe285b3-10578940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5629c21cd45cba07e1b925f86458a3eb80b0368' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/common/tooltip.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '683457643627b9fcfe285b3-10578940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9fcfe2c7a4_07649002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9fcfe2c7a4_07649002')) {function content_627b9fcfe2c7a4_07649002($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.include_ext.php';
?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign"),$_smarty_tpl);?>
</a><?php }?>
<?php }} ?>
