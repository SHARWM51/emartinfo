<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 06:48:37
         compiled from "/home/emartinf/public_html/design/backend/templates/views/products/components/picker/item_position.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1253853984627c606d8d2018-13759568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6ccd3e14abf108459f90f9562f11a0a3f3c1c47' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/products/components/picker/item_position.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1253853984627c606d8d2018-13759568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c606d8d4089_06020024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c606d8d4089_06020024')) {function content_627c606d8d4089_06020024($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('position'));
?>
<div class="object-picker__products-position" data-th="<?php echo $_smarty_tpl->__("position");?>
:">
    <input type="text"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[${data.product_id}]"
        value="${(data._index + 1) * 10}"
        size="3"
        class="input-micro"
    />
</div><?php }} ?>
