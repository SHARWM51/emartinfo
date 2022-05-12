<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:28
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/components/video_popups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:603107366627ba73cea6287-71797499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3435a0dba547d0574f0cc722e5a4fb681e2c42c4' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/components/video_popups.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '603107366627ba73cea6287-71797499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ab__vg_videos' => 0,
    'video' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73ceba799_97544320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73ceba799_97544320')) {function content_627ba73ceba799_97544320($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
    <div id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_video_popup cm-popup-box hidden" data-ca-keep-in-place="true" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
        <div id="ab__vg_iframe_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_loading"<?php if ($_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes'];
} else { ?> data-frameborder="0" data-allowfullscreen="1"<?php }?> data-src="<?php echo htmlspecialchars(fn_ab__vg_get_video_embed_url($_smarty_tpl->tpl_vars['video']->value), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value), 0);?>

        </div>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/video_popups.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/components/video_popups.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
    <div id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_video_popup cm-popup-box hidden" data-ca-keep-in-place="true" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
        <div id="ab__vg_iframe_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_loading"<?php if ($_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes'];
} else { ?> data-frameborder="0" data-allowfullscreen="1"<?php }?> data-src="<?php echo htmlspecialchars(fn_ab__vg_get_video_embed_url($_smarty_tpl->tpl_vars['video']->value), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value), 0);?>

        </div>
    </div>
<?php }
}?><?php }} ?>
