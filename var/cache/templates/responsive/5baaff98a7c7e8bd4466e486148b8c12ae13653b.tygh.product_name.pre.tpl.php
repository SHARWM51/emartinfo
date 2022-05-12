<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:28
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/hooks/products/product_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1070412103627ba73c51b810-20865481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5baaff98a7c7e8bd4466e486148b8c12ae13653b' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/hooks/products/product_name.pre.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1070412103627ba73c51b810-20865481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'icon_play' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73c52a7a1_65579930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73c52a7a1_65579930')) {function content_627ba73c52a7a1_65579930($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['icon_play'] = new Smarty_variable('icon', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['ab__vg_videos']) {?>
    <?php if ($_smarty_tpl->tpl_vars['icon_play']->value!="icon") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>30,'icon_height'=>30,'icon_class'=>"ab__vg-icon-video"), 0);?>

    <?php } else { ?>
        <i class="ab__vg-icon-video <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon"></i>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/products/product_name.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/hooks/products/product_name.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['icon_play'] = new Smarty_variable('icon', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['ab__vg_videos']) {?>
    <?php if ($_smarty_tpl->tpl_vars['icon_play']->value!="icon") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>30,'icon_height'=>30,'icon_class'=>"ab__vg-icon-video"), 0);?>

    <?php } else { ?>
        <i class="ab__vg-icon-video <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon"></i>
    <?php }?>
<?php }
}?><?php }} ?>
