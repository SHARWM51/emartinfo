<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:28
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1110018365627ba73caf0297-02763408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39949ed39229fe666c5da4675bcf07ac0c90dd87' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1110018365627ba73caf0297-02763408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'image_pair_var' => 0,
    'preview_id' => 0,
    'ab__vg_videos' => 0,
    'total_count' => 0,
    'settings' => 0,
    'th_size' => 0,
    'is_vertical' => 0,
    'v_gal_width' => 0,
    'image_id' => 0,
    'ab__vg_settings' => 0,
    'image_width' => 0,
    'image_height' => 0,
    'image_pair' => 0,
    'img_id' => 0,
    'image_counter' => 0,
    'video' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73cbe3544_49296453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73cbe3544_49296453')) {function content_627ba73cbe3544_49296453($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["th_size"] = new Smarty_variable(min((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['th_size'])===null||$tmp==='' ? 35 : $tmp),100), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']['icon']||$_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['main_pair'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['is_vertical'] = new Smarty_variable((($_smarty_tpl->tpl_vars['runtime']->value['mode']!='quick_view')&&($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['vertical']=='Y')), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']) {?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id'], null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['preview_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["preview_id"] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['ab__vg_videos'] = new Smarty_variable(fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['ab__vg_settings'] = new Smarty_variable(fn_ab__vg_get_setting($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['total_count'] = new Smarty_variable((smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])+smarty_modifier_count($_smarty_tpl->tpl_vars['ab__vg_videos']->value)+1), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['total_count']->value==0||$_smarty_tpl->tpl_vars['total_count']->value==1) {
$_smarty_tpl->tpl_vars['v_gal_width'] = new Smarty_variable(0, null, 0);
} elseif ($_smarty_tpl->tpl_vars['total_count']->value>=6&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {
$_smarty_tpl->tpl_vars['v_gal_width'] = new Smarty_variable(($_smarty_tpl->tpl_vars['th_size']->value*2+18), null, 0);
} else {
$_smarty_tpl->tpl_vars['v_gal_width'] = new Smarty_variable(($_smarty_tpl->tpl_vars['th_size']->value+12), null, 0);
}?>

<div class="ab_vg-images-wrapper" data-ca-previewer="true">
<div id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-img cm-preview-wrapper<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?> ab-vertical" style="width: -webkit-calc(100% - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px);width: calc(100% - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px);"<?php } else { ?>"<?php }?>>

    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__vg_videos:video")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__vg_videos:video"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("ab__vg_videos", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/videos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__vg_videos:video"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='pre') {?>
        <?php echo Smarty::$_smarty_vars['capture']['ab__vg_videos'];?>

    <?php }?>

    <?php ob_start();
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y') {?><?php echo " hidden";?><?php }
$_tmp15=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_link_additional_attrs'=>array("data-ca-image-order"=>0),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value),'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'link_class'=>"cm-image-previewer".$_tmp15,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>


    <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {?>
                <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'link_class'=>"cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value),'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>

        <?php }?>
    <?php } ?>

    
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='post') {?>
        <?php echo Smarty::$_smarty_vars['capture']['ab__vg_videos'];?>

    <?php }?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_popups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']||$_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
    <?php $_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable(-1, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="Y") {?>
        <input type="hidden" name="no_cache" value="1" />
        <div class="ty-center ty-product-bigpicture-thumbnails_gallery<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?> ab-vg-vertical-thumbnails" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_gal_width']->value-2, ENT_QUOTES, 'UTF-8');?>
px"<?php } else { ?>"<?php }?>><div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block"><div class="ab__vg-product-thumbnails cm-image-gallery" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-cycle="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['cycle'], ENT_QUOTES, 'UTF-8');?>
" data-ca-vertical="<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?>Y<?php } else { ?>N<?php }?>"><?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='pre') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><div class="cm-item-gallery"><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg-image_gallery_item cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item gallery <?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['video']->value['video_id'])."_mini"), 0);?>
</a></div><?php }
}
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><div class="cm-item-gallery"><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item gallery <?php if (!$_smarty_tpl->tpl_vars['ab__vg_videos']->value||$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y') {?> active<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a></div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);
if ($_smarty_tpl->tpl_vars['image_pair']->value) {?><div class="cm-item-gallery"><?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
}?><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item gallery" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a></div><?php }
}
}
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='post') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><div class="cm-item-gallery"><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg-image_gallery_item cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item gallery <?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['video']->value['video_id'])."_mini"), 0);?>
</a></div><?php }
}?></div>
                </div>
            </div>
        
    <?php } else { ?>
        <div class="ab__vg-product-thumbnails ty-center<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?> ab-vg-vertical-thumbnails" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_gal_width']->value-4, ENT_QUOTES, 'UTF-8');?>
px<?php }?>" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&(($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position'])===null||$tmp==='' ? "pre" : $tmp)=="pre") {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['video']->value['video_id'])."_mini"), 0);?>
</a><?php }
}
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-thumbnails-mini ty-product-thumbnails__item<?php if (!$_smarty_tpl->tpl_vars['ab__vg_videos']->value||$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y') {?> active<?php }?>" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);
if ($_smarty_tpl->tpl_vars['image_pair']->value) {
if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']==0) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
}?><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-thumbnails-mini ty-product-thumbnails__item" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a><?php }
}
}
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&(($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position'])===null||$tmp==='' ? "pre" : $tmp)=="post") {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['video']->value['video_id'])."_mini"), 0);?>
</a><?php }
}?>
        </div>
    <?php }?>
<?php }?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo smarty_function_script(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_images")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_images"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["th_size"] = new Smarty_variable(min((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['th_size'])===null||$tmp==='' ? 35 : $tmp),100), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']['icon']||$_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['main_pair'], null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']) {?>
    <?php $_smarty_tpl->tpl_vars["image_pair_var"] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['is_vertical'] = new Smarty_variable((($_smarty_tpl->tpl_vars['runtime']->value['mode']!='quick_view')&&($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['vertical']=='Y')), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']) {?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["image_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id'], null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['preview_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["preview_id"] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['ab__vg_videos'] = new Smarty_variable(fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['ab__vg_settings'] = new Smarty_variable(fn_ab__vg_get_setting($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>

<?php $_smarty_tpl->tpl_vars['total_count'] = new Smarty_variable((smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])+smarty_modifier_count($_smarty_tpl->tpl_vars['ab__vg_videos']->value)+1), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['total_count']->value==0||$_smarty_tpl->tpl_vars['total_count']->value==1) {
$_smarty_tpl->tpl_vars['v_gal_width'] = new Smarty_variable(0, null, 0);
} elseif ($_smarty_tpl->tpl_vars['total_count']->value>=6&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="N") {
$_smarty_tpl->tpl_vars['v_gal_width'] = new Smarty_variable(($_smarty_tpl->tpl_vars['th_size']->value*2+18), null, 0);
} else {
$_smarty_tpl->tpl_vars['v_gal_width'] = new Smarty_variable(($_smarty_tpl->tpl_vars['th_size']->value+12), null, 0);
}?>

<div class="ab_vg-images-wrapper" data-ca-previewer="true">
<div id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-img cm-preview-wrapper<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?> ab-vertical" style="width: -webkit-calc(100% - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px);width: calc(100% - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_gal_width']->value, ENT_QUOTES, 'UTF-8');?>
px);"<?php } else { ?>"<?php }?>>

    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__vg_videos:video")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__vg_videos:video"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("ab__vg_videos", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/videos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__vg_videos:video"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='pre') {?>
        <?php echo Smarty::$_smarty_vars['capture']['ab__vg_videos'];?>

    <?php }?>

    <?php ob_start();
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y') {?><?php echo " hidden";?><?php }
$_tmp16=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_link_additional_attrs'=>array("data-ca-image-order"=>0),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value),'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'link_class'=>"cm-image-previewer".$_tmp16,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>


    <?php  $_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['image_pair']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {?>
                <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'link_class'=>"cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value),'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0);?>

        <?php }?>
    <?php } ?>

    
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='post') {?>
        <?php echo Smarty::$_smarty_vars['capture']['ab__vg_videos'];?>

    <?php }?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_popups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']||$_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
    <?php $_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable(-1, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery']=="Y") {?>
        <input type="hidden" name="no_cache" value="1" />
        <div class="ty-center ty-product-bigpicture-thumbnails_gallery<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?> ab-vg-vertical-thumbnails" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_gal_width']->value-2, ENT_QUOTES, 'UTF-8');?>
px"<?php } else { ?>"<?php }?>><div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block"><div class="ab__vg-product-thumbnails cm-image-gallery" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-cycle="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['cycle'], ENT_QUOTES, 'UTF-8');?>
" data-ca-vertical="<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?>Y<?php } else { ?>N<?php }?>"><?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='pre') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><div class="cm-item-gallery"><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg-image_gallery_item cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item gallery <?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['video']->value['video_id'])."_mini"), 0);?>
</a></div><?php }
}
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><div class="cm-item-gallery"><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item gallery <?php if (!$_smarty_tpl->tpl_vars['ab__vg_videos']->value||$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y') {?> active<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a></div><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);
if ($_smarty_tpl->tpl_vars['image_pair']->value) {?><div class="cm-item-gallery"><?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
}?><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item gallery" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a></div><?php }
}
}
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position']=='post') {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><div class="cm-item-gallery"><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg-image_gallery_item cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item gallery <?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['video']->value['video_id'])."_mini"), 0);?>
</a></div><?php }
}?></div>
                </div>
            </div>
        
    <?php } else { ?>
        <div class="ab__vg-product-thumbnails ty-center<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?> ab-vg-vertical-thumbnails" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_gal_width']->value-4, ENT_QUOTES, 'UTF-8');?>
px<?php }?>" id="images_preview_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&(($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position'])===null||$tmp==='' ? "pre" : $tmp)=="pre") {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['video']->value['video_id'])."_mini"), 0);?>
</a><?php }
}
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-thumbnails-mini ty-product-thumbnails__item<?php if (!$_smarty_tpl->tpl_vars['ab__vg_videos']->value||$_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']!='Y') {?> active<?php }?>" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_smarty_tpl->tpl_vars["image_pair"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image_pair"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['image_pairs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image_pair"]->key => $_smarty_tpl->tpl_vars["image_pair"]->value) {
$_smarty_tpl->tpl_vars["image_pair"]->_loop = true;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);
if ($_smarty_tpl->tpl_vars['image_pair']->value) {
if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']==0) {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['detailed_id'], null, 0);
} else {
$_smarty_tpl->tpl_vars["img_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['image_pair']->value['image_id'], null, 0);
}?><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-thumbnails-mini ty-product-thumbnails__item" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value)."_mini"), 0);?>
</a><?php }
}
}
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value&&(($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['position'])===null||$tmp==='' ? "pre" : $tmp)=="post") {
$_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__vg_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['video']->iteration++;
$_smarty_tpl->tpl_vars['image_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_counter']->value+1, null, 0);?><a href="javascript:void(0)" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-thumbnails-mini<?php if ($_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image']=='Y'&&$_smarty_tpl->tpl_vars['video']->iteration==1) {?> active<?php }?>" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;" data-ca-image-order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('icon_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title']),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['video']->value['video_id'])."_mini"), 0);?>
</a><?php }
}?>
        </div>
    <?php }?>
<?php }?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo smarty_function_script(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_images")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_images"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
