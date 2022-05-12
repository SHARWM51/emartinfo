<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:28
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products/product_images.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1765794699627ba73cedec06-10256132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '193974ed7f198c5fa1f074005053a4da107b8de3' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products/product_images.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1765794699627ba73cedec06-10256132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'details_page' => 0,
    'quick_view' => 0,
    'product' => 0,
    'addons' => 0,
    'preview_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73cef9ea9_03018633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73cef9ea9_03018633')) {function content_627ba73cef9ea9_03018633($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['details_page']->value||$_smarty_tpl->tpl_vars['quick_view']->value) {?>

    <?php $_smarty_tpl->_capture_stack[0][] = array('image_previewer_template', null, null); ob_start(); ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('image_previewer_hook_data', null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:ab__image_previewer")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:ab__image_previewer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:ab__image_previewer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__title"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_navigation_dots']=='Y') {?>
                        <div class="pswp__counter"></div>
                        <div class="pswp__dots">
                        </div>
                    <?php }?>
                    <div class="pswp__caption <?php if (trim(Smarty::$_smarty_vars['capture']['image_previewer_hook_data'])) {?>avail<?php }?>">
                        <div class="pswp__caption__center">
                            <?php echo Smarty::$_smarty_vars['capture']['image_previewer_hook_data'];?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <template id="ab__image_previewer_template_<?php echo htmlspecialchars("preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]", ENT_QUOTES, 'UTF-8');?>
">
        <?php echo Smarty::$_smarty_vars['capture']['image_previewer_template'];?>

    </template>
<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__image_previewers/hooks/products/product_images.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__image_previewers/hooks/products/product_images.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['details_page']->value||$_smarty_tpl->tpl_vars['quick_view']->value) {?>

    <?php $_smarty_tpl->_capture_stack[0][] = array('image_previewer_template', null, null); ob_start(); ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('image_previewer_hook_data', null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:ab__image_previewer")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:ab__image_previewer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:ab__image_previewer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__title"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_navigation_dots']=='Y') {?>
                        <div class="pswp__counter"></div>
                        <div class="pswp__dots">
                        </div>
                    <?php }?>
                    <div class="pswp__caption <?php if (trim(Smarty::$_smarty_vars['capture']['image_previewer_hook_data'])) {?>avail<?php }?>">
                        <div class="pswp__caption__center">
                            <?php echo Smarty::$_smarty_vars['capture']['image_previewer_hook_data'];?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <template id="ab__image_previewer_template_<?php echo htmlspecialchars("preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]", ENT_QUOTES, 'UTF-8');?>
">
        <?php echo Smarty::$_smarty_vars['capture']['image_previewer_template'];?>

    </template>
<?php }?>

<?php }?><?php }} ?>
