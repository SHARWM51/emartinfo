<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:28
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1398631273627ba73c68aee9-03045095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2147e76c3782051d55ca03ee581b01301c727ad' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/wishlist/views/wishlist/components/add_to_wishlist.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1398631273627ba73c68aee9-03045095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'wishlist_button_type' => 0,
    'wishlist_but_id' => 0,
    'but_id' => 0,
    'wishlist_but_name' => 0,
    'but_name' => 0,
    'wishlist_but_title' => 0,
    'wishlist_but_role' => 0,
    'wishlist_but_onclick' => 0,
    'but_onclick' => 0,
    'wishlist_but_href' => 0,
    'but_href' => 0,
    'wishlist_but_icon' => 0,
    'wishlist_but_text' => 0,
    'wishlist_but_meta' => 0,
    'but_meta' => 0,
    'but_text' => 0,
    'but_title' => 0,
    'but_role' => 0,
    'but_icon' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73c6b6546_85576577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73c6b6546_85576577')) {function content_627ba73c6b6546_85576577($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_wishlist','add_to_wishlist','add_to_wishlist','add_to_wishlist'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['wishlist_button_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_button_type']->value)===null||$tmp==='' ? "icon" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_id']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_name']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_name']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_wishlist") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_role'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_role']->value)===null||$tmp==='' ? "text" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_onclick'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_onclick']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_onclick']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_href']->value : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['wishlist_button_type']->value=="icon") {?>
    <?php $_smarty_tpl->tpl_vars['but_icon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_icon']->value)===null||$tmp==='' ? "ty-icon-heart" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_text']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_meta']->value)===null||$tmp==='' ? "ty-btn__tertiary ty-btn-icon ty-add-to-wish" : $tmp), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['but_icon'] = new Smarty_variable($_smarty_tpl->tpl_vars['wishlist_but_icon']->value===true ? "ty-icon-heart" : $_smarty_tpl->tpl_vars['wishlist_but_icon']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_wishlist") : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_meta']->value)===null||$tmp==='' ? "ty-btn__text ty-add-to-wish" : $tmp), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/views/wishlist/components/add_to_wishlist.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['wishlist_button_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_button_type']->value)===null||$tmp==='' ? "icon" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_id']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_name']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_name']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_wishlist") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_role'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_role']->value)===null||$tmp==='' ? "text" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_onclick'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_onclick']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_onclick']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_href']->value : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['wishlist_button_type']->value=="icon") {?>
    <?php $_smarty_tpl->tpl_vars['but_icon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_icon']->value)===null||$tmp==='' ? "ty-icon-heart" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_text']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_meta']->value)===null||$tmp==='' ? "ty-btn__tertiary ty-btn-icon ty-add-to-wish" : $tmp), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['but_icon'] = new Smarty_variable($_smarty_tpl->tpl_vars['wishlist_but_icon']->value===true ? "ty-icon-heart" : $_smarty_tpl->tpl_vars['wishlist_but_icon']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_wishlist") : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['wishlist_but_meta']->value)===null||$tmp==='' ? "ty-btn__text ty-add-to-wish" : $tmp), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0);
}?><?php }} ?>
