<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:49
         compiled from "b7ee593178d4978b0992e1493d9a13e02c3bbc4a" */ ?>
<?php /*%%SmartyHeaderCode:1322015061627b92752fb261-03573352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ee593178d4978b0992e1493d9a13e02c3bbc4a' => 
    array (
      0 => 'b7ee593178d4978b0992e1493d9a13e02c3bbc4a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1322015061627b92752fb261-03573352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b92752ff9b1_67245885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b92752ff9b1_67245885')) {function content_627b92752ff9b1_67245885($_smarty_tpl) {?>
                            <ul id="customer_service_links">
                            <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
">About your order</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']&&$_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=='A') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
">Wishlist</a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=='Y') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
">Comparison list</a></li>
                            <?php }?>
                            </ul><?php }} ?>
