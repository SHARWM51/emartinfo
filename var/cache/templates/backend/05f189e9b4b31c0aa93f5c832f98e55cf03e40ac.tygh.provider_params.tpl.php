<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:48:33
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/provider_params.tpl" */ ?>
<?php /*%%SmartyHeaderCode:996931477627ba999350771-91687184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05f189e9b4b31c0aa93f5c832f98e55cf03e40ac' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/provider_params.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '996931477627ba999350771-91687184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'provider' => 0,
    'providers_schema' => 0,
    'param' => 0,
    'param_id' => 0,
    'provider_data' => 0,
    'value' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba99936bd63_66724467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba99936bd63_66724467')) {function content_627ba99936bd63_66724467($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><div id="content_params_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['param_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['param_id']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['param']->value['type']==="input") {?>
            <div class="control-group">
                <label for="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label<?php if ($_smarty_tpl->tpl_vars['param']->value['required']) {?> cm-required<?php }?>"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['param']->value['label']);?>
:</label>
                <div class="controls">
                    <input type="text" name="provider_data[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="30" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['provider_data']->value['params'][$_smarty_tpl->tpl_vars['param_id']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['param']->value['default'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" id="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['param']->value['type']==="checkbox") {?>
            <div class="control-group">
                <label for="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label<?php if ($_smarty_tpl->tpl_vars['param']->value['required']) {?> cm-required<?php }?>"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['param']->value['label']);?>
:</label>
                <div class="controls">
                    <input type="hidden" name="provider_data[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
                    <input type="checkbox" name="provider_data[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" id="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ((!isset($_smarty_tpl->tpl_vars['provider_data']->value['params'][$_smarty_tpl->tpl_vars['param_id']->value])&&$_smarty_tpl->tpl_vars['param']->value['default']===smarty_modifier_enum("YesNo::YES"))||(isset($_smarty_tpl->tpl_vars['provider_data']->value['params'][$_smarty_tpl->tpl_vars['param_id']->value])&&$_smarty_tpl->tpl_vars['provider_data']->value['params'][$_smarty_tpl->tpl_vars['param_id']->value]===smarty_modifier_enum("YesNo::YES"))) {?>checked="checked"<?php }?>>
                </div>
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['param']->value['type']==="select") {?>
            <div class="control-group">
                <label for="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label<?php if ($_smarty_tpl->tpl_vars['param']->value['required']) {?> cm-required<?php }?>"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['param']->value['label']);?>
:</label>
                <div class="controls">
                    <select name="provider_data[params][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['param']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
                        <option value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['value']->value===(($tmp = @$_smarty_tpl->tpl_vars['provider_data']->value['params'][$_smarty_tpl->tpl_vars['param_id']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['param']->value['default'] : $tmp)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['option']->value);?>
</option>
                        <?php } ?>
                    </select>
                    <p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['param']->value['tooltip']);?>
</p>
                </div>
            </div>
        <?php }?>
    <?php } ?>
<!--content_params_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
