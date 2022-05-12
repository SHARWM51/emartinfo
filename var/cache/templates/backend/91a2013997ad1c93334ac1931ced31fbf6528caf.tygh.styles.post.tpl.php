<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:42
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1527634820627b926e8adeb3-54766051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91a2013997ad1c93334ac1931ced31fbf6528caf' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1527634820627b926e8adeb3-54766051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locator_shipping' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926e8b0093_56703241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926e8b0093_56703241')) {function content_627b926e8b0093_56703241($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.style.php';
?><?php if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value&&$_smarty_tpl->tpl_vars['shipping']->value['company_id']==0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
