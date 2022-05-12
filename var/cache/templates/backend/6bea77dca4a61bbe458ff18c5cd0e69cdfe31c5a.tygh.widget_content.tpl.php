<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/views/setup_wizard/components/widget_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1871291712627b926f6fcf59-29514194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bea77dca4a61bbe458ff18c5cd0e69cdfe31c5a' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/setup_wizard/components/widget_content.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1871291712627b926f6fcf59-29514194',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f6ff7b8_84651047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f6ff7b8_84651047')) {function content_627b926f6ff7b8_84651047($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.store_setup_wizard_short','sw.marketplace_setup_wizard'));
?>
<div class="hidden">
    <div class="setup-wizard-panel no-js">
        <a class="handle open cm-ajax" id="opener_sw_wizard_opener" data-ca-target-id="sw_wizard_container" data-ca-event-name="setupwizard" href="<?php echo htmlspecialchars(fn_url("setup_wizard.manage"), ENT_QUOTES, 'UTF-8');?>
">
            <span class="mobile-visible">
                <?php echo $_smarty_tpl->__("sw.store_setup_wizard_short");?>

            </span>
            <span class="mobile-hidden">
                <?php echo $_smarty_tpl->__("sw.marketplace_setup_wizard");?>

            </span>
        </a>

        <a class="handle close" id="sw_wizard_closer" href="#"></a>
        <div class="setup-wizard-content" id="sw_wizard_container"><!--sw_wizard_container--></div>
    </div>
</div>

<?php }} ?>
