<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 21:33:53
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/recaptcha/settings/use_for_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1008611516627bde693b1021-48213916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '045c3965c89ecc737f47feb50b2e67d05f3f51fc' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/recaptcha/settings/use_for_settings.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1008611516627bde693b1021-48213916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_storefront_id' => 0,
    'app' => 0,
    'use_for_settings_variants' => 0,
    'variant' => 0,
    'variant_description' => 0,
    'settings' => 0,
    'is_update_for_all_available' => 0,
    'is_update_for_all_displayed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bde693ee445_94744126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bde693ee445_94744126')) {function content_627bde693ee445_94744126($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('recaptcha.recaptcha_v2','recaptcha.recaptcha_v3','recaptcha.none'));
?>
<?php $_smarty_tpl->tpl_vars['use_for_settings_variants'] = new Smarty_variable(fn_settings_variants_image_verification_use_for(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['settings'] = new Smarty_variable(fn_recaptcha_get_use_for_settings($_smarty_tpl->tpl_vars['selected_storefront_id']->value), null, 0);?>

<?php $_smarty_tpl->tpl_vars['is_update_for_all_button_displayed'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['is_update_for_all_available'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['selected_storefront_id']->value&&$_smarty_tpl->tpl_vars['app']->value['storefront.repository']->getCount(array('cache'=>true))>1, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['variant_description'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant_description']->_loop = false;
 $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['use_for_settings_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant_description']->key => $_smarty_tpl->tpl_vars['variant_description']->value) {
$_smarty_tpl->tpl_vars['variant_description']->_loop = true;
 $_smarty_tpl->tpl_vars['variant']->value = $_smarty_tpl->tpl_vars['variant_description']->key;
?>
    <div class="control-group setting-wide">
        <label class="control-label" for="addon_option_recaptcha_use_for_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_description']->value, ENT_QUOTES, 'UTF-8');?>
:</label>
        <div class="controls">
            <label class="radio">
                <input
                    type="radio"
                    name="recaptcha_use_for[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
]"
                    value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\Recaptcha\\RecaptchaTypes::RECAPTCHA_TYPE_V2"), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->tpl_vars['variant']->value]==smarty_modifier_enum("Addons\\Recaptcha\\RecaptchaTypes::RECAPTCHA_TYPE_V2")) {?>checked="checked"<?php }?>
                    id="addon_option_recaptcha_use_for_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-recaptcha-settings="use_for_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['is_update_for_all_available']->value) {?>
                        disabled="disabled"
                    <?php }?>
                ><?php echo $_smarty_tpl->__("recaptcha.recaptcha_v2");?>

            </label>
            <label class="radio">
                <input
                    type="radio"
                    name="recaptcha_use_for[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
]"
                    value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\Recaptcha\\RecaptchaTypes::RECAPTCHA_TYPE_V3"), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->tpl_vars['variant']->value]==smarty_modifier_enum("Addons\\Recaptcha\\RecaptchaTypes::RECAPTCHA_TYPE_V3")) {?>checked="checked"<?php }?>
                    id="addon_option_recaptcha_use_for_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-recaptcha-settings="use_for_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['is_update_for_all_available']->value) {?>
                        disabled="disabled"
                    <?php }?>
                ><?php echo $_smarty_tpl->__("recaptcha.recaptcha_v3");?>

            </label>
            <label class="radio">
                <input
                    type="radio"
                    name="recaptcha_use_for[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
]"
                    value=""
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->tpl_vars['variant']->value]!=smarty_modifier_enum("Addons\\Recaptcha\\RecaptchaTypes::RECAPTCHA_TYPE_V2")&&$_smarty_tpl->tpl_vars['settings']->value[$_smarty_tpl->tpl_vars['variant']->value]!=smarty_modifier_enum("Addons\\Recaptcha\\RecaptchaTypes::RECAPTCHA_TYPE_V3")) {?>
                        checked="checked"
                    <?php }?>
                    id="addon_option_recaptcha_use_for_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-recaptcha-settings="use_for_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['is_update_for_all_available']->value) {?>
                        disabled="disabled"
                    <?php }?>
                ><?php echo $_smarty_tpl->__("recaptcha.none");?>

            </label>
            <?php if ($_smarty_tpl->tpl_vars['is_update_for_all_available']->value&&!$_smarty_tpl->tpl_vars['is_update_for_all_displayed']->value) {?>
                <?php $_smarty_tpl->tpl_vars['is_update_for_all_displayed'] = new Smarty_variable(true, null, 0);?>
                <div class="right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>true,'name'=>"update_all_vendors[use_for]",'object_id'=>"update_for_all_use_for",'component'=>"recaptcha.use_for"), 0);?>

                </div>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
                    (function(_, $) {
                        $(_.doc).on('click', '[data-ca-update-for-all="recaptcha.use_for"]', function (e) {
                            var $controls = $('[name*="recaptcha_use_for"]');
                            var currentState = $controls.prop('disabled');
                            $controls.prop('disabled', currentState ? null : 'disabled');
                        });
                    })(Tygh, Tygh.$);
                <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>
        </div>
    </div>
<?php } ?>

<?php echo smarty_function_script(array('src'=>"js/addons/recaptcha/backend/settings.js"),$_smarty_tpl);?>

<?php }} ?>
