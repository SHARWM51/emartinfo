<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 06:48:37
         compiled from "/home/emartinf/public_html/design/backend/templates/views/products/components/picker/item_extended.tpl" */ ?>
<?php /*%%SmartyHeaderCode:860926545627c606d8bcc64-76371593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66867a7067b2679142e2afaa940025eede969aac' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/products/components/picker/item_extended.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '860926545627c606d8bcc64-76371593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_simple_product' => 0,
    'type' => 0,
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c606d8c4925_21064926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c606d8c4925_21064926')) {function content_627c606d8c4925_21064926($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php $_smarty_tpl->tpl_vars['show_simple_product'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_simple_product']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>


    ${data.image && data.image.image_path
    ? `<img src="${data.image.image_path}" width="${data.image.width}" height="${data.image.height}" alt="${data.image.alt}" class="object-picker__products-image"/>`
        : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: ${data.image_width}px; height: ${data.image_height}px;"> <span class="cs-icon glyph-image"></span></div>`
    }

<div class="object-picker__products-main">
    <div class="object-picker__products-name">
        <?php if ($_smarty_tpl->tpl_vars['type']->value==="result") {?>
            <div class="object-picker__name-content">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 
                
                    ${data.product ? data.product : data.text}
                 
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
        <?php } else { ?>
            <a href="${data.url}" class="object-picker__products-name-content object-picker__products-name-content--link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.product} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
    </div>

    <div class="object-picker__products-labels">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:object_picker_products_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:object_picker_products_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="object-picker__products-product-code">
                <span class="object-picker__products-product-code-label">${data.product_code ? data.product_code : ``}</span>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:object_picker_products_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<?php if (!$_smarty_tpl->tpl_vars['show_simple_product']->value) {?>
<div class="object-picker__products-price">
    ${data.price_formatted}
</div>
<?php }?><?php }} ?>
