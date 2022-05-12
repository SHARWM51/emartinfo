<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:49
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/blocks/static_templates/payment_icons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112567510627b9275329dc4-83950250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03f9f743c32bffea70bd0aa972bdd50c7c781bf0' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/blocks/static_templates/payment_icons.tpl',
      1 => 1652253997,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112567510627b9275329dc4-83950250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9275333458_15925593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9275333458_15925593')) {function content_627b9275333458_15925593($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="ty-payment-icons">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:payment_icons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:payment_icons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <span class="ty-payment-icons__item twocheckout">&nbsp;</span>
    <span class="ty-payment-icons__item paypal">&nbsp;</span>
    <span class="ty-payment-icons__item mastercard">&nbsp;</span>
    <span class="ty-payment-icons__item visa">&nbsp;</span>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:payment_icons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/payment_icons.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/payment_icons.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<div class="ty-payment-icons">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:payment_icons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:payment_icons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <span class="ty-payment-icons__item twocheckout">&nbsp;</span>
    <span class="ty-payment-icons__item paypal">&nbsp;</span>
    <span class="ty-payment-icons__item mastercard">&nbsp;</span>
    <span class="ty-payment-icons__item visa">&nbsp;</span>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:payment_icons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }?><?php }} ?>
