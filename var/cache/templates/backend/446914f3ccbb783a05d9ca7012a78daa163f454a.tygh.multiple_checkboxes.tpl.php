<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:34:58
         compiled from "/home/emartinf/public_html/design/backend/templates/common/multiple_checkboxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2006077578627b985a235586-79741852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '446914f3ccbb783a05d9ca7012a78daa163f454a' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/common/multiple_checkboxes.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2006077578627b985a235586-79741852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'id_field' => 0,
    'item' => 0,
    'k' => 0,
    'name_field' => 0,
    'list_mode' => 0,
    'input_id' => 0,
    'id' => 0,
    'input_name' => 0,
    'item_ids' => 0,
    'item_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b985a240f53_27535603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b985a240f53_27535603')) {function content_627b985a240f53_27535603($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['id_field']->value) {?>
        <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['id_field']->value], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value, null, 0);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['name_field']->value) {?>
        <?php $_smarty_tpl->tpl_vars['item_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name_field']->value], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['item_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?>
    <?php }?>

    <label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input 
            type="checkbox" 
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
]" 
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['item_ids']->value)) {?>
                checked="checked"
            <?php }?> 
        />
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>

    </label>
<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
    <?php echo $_smarty_tpl->__("no_items");?>

<?php } ?><?php }} ?>
