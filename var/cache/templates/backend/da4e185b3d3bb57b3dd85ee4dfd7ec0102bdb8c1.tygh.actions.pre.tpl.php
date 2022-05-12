<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:466540459627b926f28e143-62086652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da4e185b3d3bb57b3dd85ee4dfd7ec0102bdb8c1' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '466540459627b926f28e143-62086652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f293498_81604956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f293498_81604956')) {function content_627b926f293498_81604956($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?>


<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']==='reviews'&&($_smarty_tpl->tpl_vars['runtime']->value['mode']==='manage'&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts']!==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['runtime']->value['mode']==='update')) {?>
    <?php $_smarty_tpl->tpl_vars['select_storefront'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_storefront'] = clone $_smarty_tpl->tpl_vars['select_storefront'];?>
<?php }?>
<?php }} ?>
