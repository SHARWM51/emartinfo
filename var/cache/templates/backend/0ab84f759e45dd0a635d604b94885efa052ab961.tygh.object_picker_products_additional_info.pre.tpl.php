<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 06:48:37
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/product_variations/hooks/products/object_picker_products_additional_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1106076330627c606d8d0178-26096107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ab84f759e45dd0a635d604b94885efa052ab961' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/product_variations/hooks/products/object_picker_products_additional_info.pre.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1106076330627c606d8d0178-26096107',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c606d8d0a21_33401557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c606d8d0a21_33401557')) {function content_627c606d8d0a21_33401557($_smarty_tpl) {?>
    ${data.variation_features
        ? `<div class="product-variations__variation-features product-variations__variation-features--inline product-variations__variation-features--secondary">
            ${data.variation_features.map(feature => feature['variant']).join(' • ')}&nbsp;—&nbsp;
           </div>`
        : ''
    }
<?php }} ?>
