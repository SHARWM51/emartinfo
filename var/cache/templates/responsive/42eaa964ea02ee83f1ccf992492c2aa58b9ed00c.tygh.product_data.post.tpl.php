<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:28
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/products/product_data.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130368297627ba73ca1f935-58102150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42eaa964ea02ee83f1ccf992492c2aa58b9ed00c' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__stickers/hooks/products/product_data.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '130368297627ba73ca1f935-58102150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'controller_mode' => 0,
    'block' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'skip' => 0,
    'details_page' => 0,
    'product' => 0,
    'ab__stickers_current_tmpl' => 0,
    'pos' => 0,
    'addons' => 0,
    'position' => 0,
    'key_1' => 0,
    'sticker' => 0,
    'key_2' => 0,
    'view_type' => 0,
    'pos_counter' => 0,
    'graphic_style' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73ca78c47_18593254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73ca78c47_18593254')) {function content_627ba73ca78c47_18593254($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php $_smarty_tpl->tpl_vars['text_style'] = new Smarty_variable(constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::TEXT"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['graphic_style'] = new Smarty_variable(constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::GRAPHIC"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['controller_mode'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['skip'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['controller_mode']->value=="product_features.compare"&&$_smarty_tpl->tpl_vars['block']->value['type']=="main") {?>
    <?php $_smarty_tpl->tpl_vars['skip'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['skip']->value===false) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__stickers:product_stickers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__stickers:product_stickers_pre")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                <div class="ab-stickers-wrapper">
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                    <?php $_smarty_tpl->tpl_vars['pos'] = new Smarty_variable('list', null, 0);?>

                    <?php if ($_REQUEST['dispatch']=="products.view"&&$_smarty_tpl->tpl_vars['block']->value['type']=="main") {?>
                        <?php $_smarty_tpl->tpl_vars['pos'] = new Smarty_variable("detailed_page", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['key_1'] = new Smarty_variable("display_on_detailed_pages", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['key_2'] = new Smarty_variable('', null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type']!="main"&&$_smarty_tpl->tpl_vars['block']->value['properties']['template']) {?>
                        <?php $_smarty_tpl->tpl_vars['key_1'] = new Smarty_variable("display_on_lists", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['key_2'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['properties']['template'], null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['key_1'] = new Smarty_variable("display_on_lists", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['key_2'] = new Smarty_variable($_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value, null, 0);?>
                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars['current_position'] = new Smarty_variable("output_position_".((string)$_smarty_tpl->tpl_vars['pos']->value), null, 0);?>

                    <?php  $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['position']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['ab__stickers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['pos_counter'] = new Smarty_variable(0, null, 0);?>
                        <div class="ab-stickers-container ab-stickers-container__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->key, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_output_type"], ENT_QUOTES, 'UTF-8');?>
-filling">
                            <?php  $_smarty_tpl->tpl_vars['sticker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sticker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['position']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->key => $_smarty_tpl->tpl_vars['sticker']->value) {
$_smarty_tpl->tpl_vars['sticker']->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars['view_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['sticker']->value[$_smarty_tpl->tpl_vars['key_1']->value], null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['key_2']->value) {?>
                                    <?php $_smarty_tpl->tpl_vars['view_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['view_type']->value[$_smarty_tpl->tpl_vars['key_2']->value], null, 0);?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['pos_counter']->value<$_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_max_count"]) {?>
                                    <?php $_smarty_tpl->tpl_vars['pos_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['pos_counter']->value+1, null, 0);?>
                                    <div class="ab-sticker-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['view_type']->value)===null||$tmp==='' ? "full_size" : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['sticker']->value['style']==$_smarty_tpl->tpl_vars['graphic_style']->value) {?> small-image-size-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size'], ENT_QUOTES, 'UTF-8');?>
 full-image-size-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size'], ENT_QUOTES, 'UTF-8');
}?>" data-ab-sticker-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->key, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['sticker']->value['placeholders']) {?> data-placeholders='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->value['placeholders'], ENT_QUOTES, 'UTF-8');?>
'<?php }?>></div>
                                <?php }?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                </div>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php if (trim(strip_tags(Smarty::$_smarty_vars['capture']["ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)],"<div>"))) {?>
        <?php echo Smarty::$_smarty_vars['capture']["ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)];?>

    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']["product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)];?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/products/product_data.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/hooks/products/product_data.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php $_smarty_tpl->tpl_vars['text_style'] = new Smarty_variable(constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::TEXT"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['graphic_style'] = new Smarty_variable(constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::GRAPHIC"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['controller_mode'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['skip'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['controller_mode']->value=="product_features.compare"&&$_smarty_tpl->tpl_vars['block']->value['type']=="main") {?>
    <?php $_smarty_tpl->tpl_vars['skip'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['skip']->value===false) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__stickers:product_stickers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__stickers:product_stickers_pre")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                <div class="ab-stickers-wrapper">
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers_pre"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                    <?php $_smarty_tpl->tpl_vars['pos'] = new Smarty_variable('list', null, 0);?>

                    <?php if ($_REQUEST['dispatch']=="products.view"&&$_smarty_tpl->tpl_vars['block']->value['type']=="main") {?>
                        <?php $_smarty_tpl->tpl_vars['pos'] = new Smarty_variable("detailed_page", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['key_1'] = new Smarty_variable("display_on_detailed_pages", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['key_2'] = new Smarty_variable('', null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type']!="main"&&$_smarty_tpl->tpl_vars['block']->value['properties']['template']) {?>
                        <?php $_smarty_tpl->tpl_vars['key_1'] = new Smarty_variable("display_on_lists", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['key_2'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['properties']['template'], null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['key_1'] = new Smarty_variable("display_on_lists", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['key_2'] = new Smarty_variable($_smarty_tpl->tpl_vars['ab__stickers_current_tmpl']->value, null, 0);?>
                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars['current_position'] = new Smarty_variable("output_position_".((string)$_smarty_tpl->tpl_vars['pos']->value), null, 0);?>

                    <?php  $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['position']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['ab__stickers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['pos_counter'] = new Smarty_variable(0, null, 0);?>
                        <div class="ab-stickers-container ab-stickers-container__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->key, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_output_type"], ENT_QUOTES, 'UTF-8');?>
-filling">
                            <?php  $_smarty_tpl->tpl_vars['sticker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sticker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['position']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->key => $_smarty_tpl->tpl_vars['sticker']->value) {
$_smarty_tpl->tpl_vars['sticker']->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars['view_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['sticker']->value[$_smarty_tpl->tpl_vars['key_1']->value], null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['key_2']->value) {?>
                                    <?php $_smarty_tpl->tpl_vars['view_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['view_type']->value[$_smarty_tpl->tpl_vars['key_2']->value], null, 0);?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['pos_counter']->value<$_smarty_tpl->tpl_vars['addons']->value['ab__stickers'][((string)$_smarty_tpl->tpl_vars['position']->key).((string)$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['output_position'])."_max_count"]) {?>
                                    <?php $_smarty_tpl->tpl_vars['pos_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['pos_counter']->value+1, null, 0);?>
                                    <div class="ab-sticker-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['view_type']->value)===null||$tmp==='' ? "full_size" : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['sticker']->value['style']==$_smarty_tpl->tpl_vars['graphic_style']->value) {?> small-image-size-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size'], ENT_QUOTES, 'UTF-8');?>
 full-image-size-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size'], ENT_QUOTES, 'UTF-8');
}?>" data-ab-sticker-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->key, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['sticker']->value['placeholders']) {?> data-placeholders='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->value['placeholders'], ENT_QUOTES, 'UTF-8');?>
'<?php }?>></div>
                                <?php }?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['details_page']->value&&$_smarty_tpl->tpl_vars['product']->value['ab__stickers']) {?>
                </div>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__stickers:product_stickers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
    <?php if (trim(strip_tags(Smarty::$_smarty_vars['capture']["ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)],"<div>"))) {?>
        <?php echo Smarty::$_smarty_vars['capture']["ab__stickers_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)];?>

    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']["product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)];?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>
