<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:28
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/components/videos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:619493855627ba73cbfdd34-29740403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9404b4a50ba6352fafd0f61ec875b6ef8dc72a29' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/components/videos.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '619493855627ba73cbfdd34-29740403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ab__vg_videos' => 0,
    'addons' => 0,
    'quick_view' => 0,
    'preview_id' => 0,
    'video' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73cc22a08_76116605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73cc22a08_76116605')) {function content_627ba73cc22a08_76116605($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
        
            
            
        

        <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['on_thumbnail_click']=='image_replace'||$_smarty_tpl->tpl_vars['quick_view']->value) {?>
            <div id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_loading hidden ab__vg-image_gallery_video ab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon"<?php if ($_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes'];
} else { ?> data-frameborder="0" data-allowfullscreen="1"<?php }?> data-src="<?php echo htmlspecialchars(fn_ab__vg_get_video_embed_url($_smarty_tpl->tpl_vars['video']->value), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>$_smarty_tpl->tpl_vars['image_width']->value,'height'=>$_smarty_tpl->tpl_vars['image_height']->value), 0);?>

            </div>
        <?php } else { ?>
            <a id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden ab__vg-image_gallery_video ab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon cm-dialog-opener" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>$_smarty_tpl->tpl_vars['image_width']->value,'height'=>$_smarty_tpl->tpl_vars['image_height']->value), 0);?>

            </a>
        <?php }?>
    <?php } ?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/videos.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/components/videos.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
        
            
            
        

        <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['on_thumbnail_click']=='image_replace'||$_smarty_tpl->tpl_vars['quick_view']->value) {?>
            <div id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_loading hidden ab__vg-image_gallery_video ab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon"<?php if ($_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->tpl_vars['video']->value['settings']['iframe_attributes'];
} else { ?> data-frameborder="0" data-allowfullscreen="1"<?php }?> data-src="<?php echo htmlspecialchars(fn_ab__vg_get_video_embed_url($_smarty_tpl->tpl_vars['video']->value), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>$_smarty_tpl->tpl_vars['image_width']->value,'height'=>$_smarty_tpl->tpl_vars['image_height']->value), 0);?>

            </div>
        <?php } else { ?>
            <a id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden ab__vg-image_gallery_video ab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon cm-dialog-opener" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>$_smarty_tpl->tpl_vars['image_width']->value,'height'=>$_smarty_tpl->tpl_vars['image_height']->value), 0);?>

            </a>
        <?php }?>
    <?php } ?>
<?php }
}?><?php }} ?>
