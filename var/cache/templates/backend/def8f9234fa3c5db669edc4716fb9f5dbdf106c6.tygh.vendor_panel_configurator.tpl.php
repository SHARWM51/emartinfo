<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:36:16
         compiled from "/home/emartinf/public_html/design/backend/templates/views/setup_wizard/components/tabs/sections/vendor_panel_configurator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1301474070627b98a8dbf0b1-11076578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'def8f9234fa3c5db669edc4716fb9f5dbdf106c6' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/setup_wizard/components/tabs/sections/vendor_panel_configurator.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1301474070627b98a8dbf0b1-11076578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sect' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b98a8dcb861_22925238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98a8dcb861_22925238')) {function content_627b98a8dcb861_22925238($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.easy_admin_panel_for_vendors','sw.product_tabs_and_properties','sw.configure','sw.branding_and_colors','sw.configure'));
?>
<?php if ($_smarty_tpl->tpl_vars['sect']->value['header']) {?>
    <div class="control-group">
        <h2 class="sw-block-title"><?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['sect']->value['header']));?>
</h2>
    </div>
<?php }?>

<div id="container_sw_easy_admin_panel_for_vendors" class="control-group sw_size_2">
    <label for="sw_vendor_panel_configurator_state" class="control-label ">
        <?php echo $_smarty_tpl->__("sw.easy_admin_panel_for_vendors");?>
:
    </label>
    <div class="controls">
        <input type="hidden" name="addon_name[]" value="vendor_panel_configurator" />
        <input type="hidden" name="vendor_panel_configurator_state" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
        <?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('checked'=>($_smarty_tpl->tpl_vars['addons']->value['vendor_panel_configurator']['status']===smarty_modifier_enum("ObjectStatuses::ACTIVE")),'input_name'=>"vendor_panel_configurator_state",'input_value'=>smarty_modifier_enum("YesNo::YES"),'input_id'=>"sw_vendor_panel_configurator_state",'input_class'=>"cm-submit",'input_attrs'=>array("data-ca-dispatch"=>"dispatch[setup_wizard.update_addon_status]")), 0);?>

    </div>
</div>

<?php if (($_smarty_tpl->tpl_vars['addons']->value['vendor_panel_configurator']['status']===smarty_modifier_enum("ObjectStatuses::ACTIVE"))) {?>
    <div id="container_sw_vendor_panel_product_properties" class="control-group sw_size_2">
        <label class="control-label"><?php echo $_smarty_tpl->__("sw.product_tabs_and_properties");?>
</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"addons.update?addon=vendor_panel_configurator&selected_section=settings",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0);?>

        </div>
    </div>

    <div id="container_sw_vendor_panel_branding" class="control-group sw_size_2">
        <label class="control-label"><?php echo $_smarty_tpl->__("sw.branding_and_colors");?>
</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"addons.update?addon=vendor_panel_configurator&selected_sub_section=vendor_panel_configurator_vendor_panel_style&selected_section=settings",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0);?>

        </div>
    </div>
<?php }?><?php }} ?>
