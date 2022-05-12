<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:00:53
         compiled from "/home/emartinf/public_html/design/backend/templates/views/storefronts/components/access_key.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1345242181627bac7d4ea544-39825920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdae3f493998258967c130ca3943761d795b52be' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/storefronts/components/access_key.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1345242181627bac7d4ea544-39825920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'access_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bac7d4edea0_16308210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bac7d4edea0_16308210')) {function content_627bac7d4edea0_16308210($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_access_key'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[access_key]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="access_key_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("storefront_access_key");?>

    </label>
    <div class="controls">
        <input type="text"
               id="access_key_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="input-large"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>
<?php }} ?>
