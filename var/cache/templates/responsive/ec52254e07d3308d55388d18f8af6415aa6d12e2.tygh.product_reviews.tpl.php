<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:29
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/product_reviews/blocks/product_tabs/product_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:962551497627ba73d3d2649-88239399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec52254e07d3308d55388d18f8af6415aa6d12e2' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/product_reviews/blocks/product_tabs/product_reviews.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '962551497627ba73d3d2649-88239399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73d3df279_89034783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73d3df279_89034783')) {function content_627ba73d3df279_89034783($_smarty_tpl) {?><?php if (!is_callable('smarty_block_component')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.component.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.title','product_reviews.title','product_reviews.title','product_reviews.title','product_reviews.title','product_reviews.title'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true)); $_block_repeat=true; echo smarty_block_component(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/blocks/product_tabs/product_reviews.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/blocks/product_tabs/product_reviews.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true)); $_block_repeat=true; echo smarty_block_component(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
