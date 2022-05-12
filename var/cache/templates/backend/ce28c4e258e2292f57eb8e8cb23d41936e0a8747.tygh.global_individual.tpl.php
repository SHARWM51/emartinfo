<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:34:58
         compiled from "/home/emartinf/public_html/design/backend/templates/components/global_individual.tpl" */ ?>
<?php /*%%SmartyHeaderCode:752439803627b985a209f04-83405444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce28c4e258e2292f57eb8e8cb23d41936e0a8747' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/components/global_individual.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '752439803627b985a209f04-83405444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html_id' => 0,
    'item' => 0,
    'has_value_holder' => 0,
    'content' => 0,
    'disable_input' => 0,
    'extra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b985a217b15_65137676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b985a217b15_65137676')) {function content_627b985a217b15_65137676($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('default','global_individual.global_tooltip','global_individual.individual_tooltip'));
?>


<?php echo smarty_function_script(array('src'=>"js/tygh/backend/components/global_individual.js"),$_smarty_tpl);?>


<div class="global-individual"
    data-ca-global-individual="component"
    data-ca-global-individual-default-text="<?php echo $_smarty_tpl->__("default");?>
"
    data-ca-global-individual-html-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-individual-html-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['individual_html_name'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-global-html-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['global_html_name'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-has-value-holder-for-disabled-control="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['has_value_holder']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-is-global="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['has_global_value'], ENT_QUOTES, 'UTF-8');?>
"
>
    <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_empty_global_value"
        class="hidden"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['global_html_name'], ENT_QUOTES, 'UTF-8');?>
"
        value="<?php echo htmlspecialchars(constant("\Tygh\Settings::NULL_VALUE"), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-global-individual="hiddenInput">
    <div class="global-individual__field-wrapper"
        data-ca-global-individual="fieldWrapper"
    >
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
    <div class="global-individual__buttons">
        <input
            type="checkbox"
            class="global-individual__btn cm-tooltip
                <?php if (!$_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>global-individual__btn--individual<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>global-individual__btn--disabled<?php }?>"
            data-ca-global-individual="button"
            title="<div class='global-individual__tooltip'>
                    <span <?php if ($_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>class='hidden'<?php }?>
                        data-ca-global-individual-html-id='tooltip_global_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
'
                    ><?php echo $_smarty_tpl->__("global_individual.global_tooltip");?>
</span>
                    <span <?php if (!$_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>class='hidden'<?php }?>
                        data-ca-global-individual-html-id='tooltip_individual_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
'
                    ><?php echo $_smarty_tpl->__("global_individual.individual_tooltip");?>
</span>
                </div>
            "
        />
        <?php if (trim($_smarty_tpl->tpl_vars['extra']->value)!=='') {?>
            <div class="global-individual__container">
                <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

            </div>
        <?php }?>
    </div>
</div>
<?php }} ?>
