<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:28
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:369744099627ba73cf0ae27-30230167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7d4ff6845c653a1e4cd02c73a77a8eb829a3083' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '369744099627ba73cf0ae27-30230167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'obj_id' => 0,
    'clean_price' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73cf28416_86914398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73cf28416_86914398')) {function content_627ba73cf28416_86914398($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_price']=="Y") {?>

    <div class="pswp__price-wrap<?php if ($_smarty_tpl->tpl_vars['product']->value['discount']||$_smarty_tpl->tpl_vars['product']->value['list_discount']) {?> discounted<?php }?>">   
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0);?>

        <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

    </div>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_add_to_cart']=="Y"&&Smarty::$_smarty_vars['capture']['ab__ip_cart_button_id']) {?>
    <div class="pswp__button_external" data-ca-external-click-id="<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['ab__ip_cart_button_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_to_cart"),'but_name'=>''), 0);?>

    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_price']=="Y") {?>

    <div class="pswp__price-wrap<?php if ($_smarty_tpl->tpl_vars['product']->value['discount']||$_smarty_tpl->tpl_vars['product']->value['list_discount']) {?> discounted<?php }?>">   
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0);?>

        <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

    </div>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_add_to_cart']=="Y"&&Smarty::$_smarty_vars['capture']['ab__ip_cart_button_id']) {?>
    <div class="pswp__button_external" data-ca-external-click-id="<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['ab__ip_cart_button_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_to_cart"),'but_name'=>''), 0);?>

    </div>
<?php }
}?><?php }} ?>
