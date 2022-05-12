<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:00:53
         compiled from "/home/emartinf/public_html/design/backend/templates/views/storefronts/components/name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1843819442627bac7d4c4281-12086028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6026d362131a469fc02eab24a42d932eeae2a3c' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/storefronts/components/name.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1843819442627bac7d4c4281-12086028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'readonly' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bac7d4c97c5_36969634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bac7d4c97c5_36969634')) {function content_627bac7d4c97c5_36969634($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[name]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    >
        <?php echo $_smarty_tpl->__("name");?>

    </label>
    <div class="controls">
        <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <input type="text"
                   id="name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   class="input-large"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
        <?php }?>
    </div>
</div>
<?php }} ?>
