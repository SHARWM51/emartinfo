<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:33:44
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/views/categories/components/categories_multicolumns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:747427887627ba62023e706-58545383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4a41ecaf9f5689e3531859b472c171cc0eb3482' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/views/categories/components/categories_multicolumns.tpl',
      1 => 1652253997,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '747427887627ba62023e706-58545383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'categories' => 0,
    'columns' => 0,
    'splitted_categories' => 0,
    'scats' => 0,
    'category' => 0,
    'block' => 0,
    'href' => 0,
    'settings' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba620266e36_38517927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba620266e36_38517927')) {function content_627ba620266e36_38517927($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['categories']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "3" : $tmp),'assign'=>"splitted_categories"),$_smarty_tpl);?>

<div class="ty-subcategories">
    <?php  $_smarty_tpl->tpl_vars["scats"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["scats"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["scats"]->key => $_smarty_tpl->tpl_vars["scats"]->value) {
$_smarty_tpl->tpl_vars["scats"]->_loop = true;
?><div class="ty-subcategories-block"><?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
if ($_smarty_tpl->tpl_vars['category']->value) {?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
 ty-subcategories-block__item"><?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['category']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><a href="<?php if ($_smarty_tpl->tpl_vars['href']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');
}?>" class="ty-subcategories-block__a"><?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), 0);
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></div><?php }
} ?></div><?php } ?>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/categories/components/categories_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/categories/components/categories_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['categories']->value,'size'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "3" : $tmp),'assign'=>"splitted_categories"),$_smarty_tpl);?>

<div class="ty-subcategories">
    <?php  $_smarty_tpl->tpl_vars["scats"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["scats"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["scats"]->key => $_smarty_tpl->tpl_vars["scats"]->value) {
$_smarty_tpl->tpl_vars["scats"]->_loop = true;
?><div class="ty-subcategories-block"><?php  $_smarty_tpl->tpl_vars["category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category"]->key => $_smarty_tpl->tpl_vars["category"]->value) {
$_smarty_tpl->tpl_vars["category"]->_loop = true;
if ($_smarty_tpl->tpl_vars['category']->value) {?><div class="ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
 ty-subcategories-block__item"><?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['category']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><a href="<?php if ($_smarty_tpl->tpl_vars['href']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'UTF-8');
}?>" class="ty-subcategories-block__a"><?php if ($_smarty_tpl->tpl_vars['category']->value['main_pair']) {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_detailed_link'=>false,'images'=>$_smarty_tpl->tpl_vars['category']->value['main_pair'],'no_ids'=>true,'image_id'=>"category_image",'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['category_lists_thumbnail_height'],'class'=>"ty-subcategories-img"), 0);
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a></div><?php }
} ?></div><?php } ?>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
