<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:29
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1107648538627ba73d2a51a3-34052074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d26929fb28f4cd5d26842dbf23494687ffa2bc6' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1107648538627ba73d2a51a3-34052074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_details_in_tab' => 0,
    'settings' => 0,
    'tabs' => 0,
    'tab' => 0,
    'tab_id' => 0,
    'tab_content_capture' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73d2d6132_11988968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73d2d6132_11988968')) {function content_627ba73d2d6132_11988968($_smarty_tpl) {?><?php if (!is_callable('smarty_function_render_block')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.render_block.php';
if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["product_details_in_tab"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['product_details_in_tab']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab'] : $tmp), null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars["tab"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tab"]->_loop = false;
 $_smarty_tpl->tpl_vars["tab_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tab"]->key => $_smarty_tpl->tpl_vars["tab"]->value) {
$_smarty_tpl->tpl_vars["tab"]->_loop = true;
 $_smarty_tpl->tpl_vars["tab_id"]->value = $_smarty_tpl->tpl_vars["tab"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup']!="Y"&&$_smarty_tpl->tpl_vars['tab']->value['status']=="A") {?>
            <?php $_smarty_tpl->tpl_vars["tab_content_capture"] = new Smarty_variable("tab_content_capture_".((string)$_smarty_tpl->tpl_vars['tab_id']->value), null, 0);?>

            <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['tab_content_capture']->value, null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='B') {?>
                    <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['tab']->value['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='T') {?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tab']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_tab_id'=>$_smarty_tpl->tpl_vars['tab']->value['html_id']), 0);?>

                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value])) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"tabs:ab__product_tabs_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['product_details_in_tab']->value=="N") {?>
                        <h3 class="tab-list-title" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"tabs:ab__product_tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value];?>

                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"tabs:ab__tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"tabs:ab__tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox_content", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['product_details_in_tab']->value=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox']), 0);?>

    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']['tabsbox'];?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"tabs:ab__tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/overrides/views/tabs/components/product_tabs.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["product_details_in_tab"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['product_details_in_tab']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab'] : $tmp), null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars["tab"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tab"]->_loop = false;
 $_smarty_tpl->tpl_vars["tab_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tab"]->key => $_smarty_tpl->tpl_vars["tab"]->value) {
$_smarty_tpl->tpl_vars["tab"]->_loop = true;
 $_smarty_tpl->tpl_vars["tab_id"]->value = $_smarty_tpl->tpl_vars["tab"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['show_in_popup']!="Y"&&$_smarty_tpl->tpl_vars['tab']->value['status']=="A") {?>
            <?php $_smarty_tpl->tpl_vars["tab_content_capture"] = new Smarty_variable("tab_content_capture_".((string)$_smarty_tpl->tpl_vars['tab_id']->value), null, 0);?>

            <?php $_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['tab_content_capture']->value, null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='B') {?>
                    <?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['tab']->value['block_id'],'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_type']=='T') {?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tab']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_tab_id'=>$_smarty_tpl->tpl_vars['tab']->value['html_id']), 0);?>

                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value])) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"tabs:ab__product_tabs_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['product_details_in_tab']->value=="N") {?>
                        <h3 class="tab-list-title" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"tabs:ab__product_tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value];?>

                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"tabs:ab__tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"tabs:ab__tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox_content", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['product_details_in_tab']->value=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox']), 0);?>

    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']['tabsbox'];?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"tabs:ab__tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
