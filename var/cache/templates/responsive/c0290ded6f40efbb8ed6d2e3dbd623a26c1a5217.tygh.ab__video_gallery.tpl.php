<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:29
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:993772180627ba73d56a748-83527780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0290ded6f40efbb8ed6d2e3dbd623a26c1a5217' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '993772180627ba73d56a748-83527780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'product_id' => 0,
    'ab__vg_videos' => 0,
    'video' => 0,
    'addons' => 0,
    'tmb_width' => 0,
    'tmb_height' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73d581d78_42962685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73d581d78_42962685')) {function content_627ba73d581d78_42962685($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['tmb_width'] = new Smarty_variable(360, null, 0);?>
<?php $_smarty_tpl->tpl_vars['tmb_height'] = new Smarty_variable(240, null, 0);?>

<?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['ab__vg_videos'] = new Smarty_variable(fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
<div class="ab__video_gallery-block">
    <div class="ab__vg-videos">
        <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
            <div class="ab__vg-video">
                <a href="javascript:void(0)" class="cm-dialog-opener" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                    <span class="ab__vg-video_thumb ab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon">
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>$_smarty_tpl->tpl_vars['tmb_width']->value,'height'=>$_smarty_tpl->tpl_vars['tmb_height']->value), 0);?>

                    </span>
                </a>
                <div class="ab__vg-video_title"><p><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong></p></div>
                <div class="ab__vg-video_description ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['video']->value['description'];?>
</div>
            </div>
        <?php } ?>
    </div>
</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['tmb_width'] = new Smarty_variable(360, null, 0);?>
<?php $_smarty_tpl->tpl_vars['tmb_height'] = new Smarty_variable(240, null, 0);?>

<?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['ab__vg_videos'] = new Smarty_variable(fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
<div class="ab__video_gallery-block">
    <div class="ab__vg-videos">
        <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
            <div class="ab__vg-video">
                <a href="javascript:void(0)" class="cm-dialog-opener" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                    <span class="ab__vg-video_thumb ab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon">
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>$_smarty_tpl->tpl_vars['tmb_width']->value,'height'=>$_smarty_tpl->tpl_vars['tmb_height']->value), 0);?>

                    </span>
                </a>
                <div class="ab__vg-video_title"><p><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong></p></div>
                <div class="ab__vg-video_description ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['video']->value['description'];?>
</div>
            </div>
        <?php } ?>
    </div>
</div>
<?php }?>
<?php }?><?php }} ?>
