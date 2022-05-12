<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:36:16
         compiled from "/home/emartinf/public_html/design/backend/templates/views/setup_wizard/components/tabs/sections/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1010623562627b98a8dd32e4-41955996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e0c38990d966330d5ab33565e2e701eba0608c7' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/setup_wizard/components/tabs/sections/location.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1010623562627b98a8dd32e4-41955996',
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
  'unifunc' => 'content_627b98a8ddd5a8_22796989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98a8ddd5a8_22796989')) {function content_627b98a8ddd5a8_22796989($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.enable_vendor_location_using_google_map','sw.configure'));
?>
<?php if ($_smarty_tpl->tpl_vars['sect']->value['header']) {?>
    <div class="control-group">
        <h2 class="sw-block-title"><?php echo $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['sect']->value['header']));?>
</h2>
    </div>
<?php }?>

<div class="control-group">
    <label for="sw_vendor_location_state" class="control-label "><?php echo $_smarty_tpl->__("sw.enable_vendor_location_using_google_map");?>
:</label>

    <div class="controls">
        <input type="hidden" name="addon_name[]" value="vendor_locations" />
        <input type="hidden" name="vendor_locations_state" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
        <?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('checked'=>($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['status']===smarty_modifier_enum("ObjectStatuses::ACTIVE")),'input_name'=>"vendor_locations_state",'input_value'=>smarty_modifier_enum("YesNo::YES"),'input_id'=>"sw_vendor_location_state",'input_class'=>"cm-submit",'input_attrs'=>array("data-ca-dispatch"=>"dispatch[setup_wizard.update_addon_status]")), 0);?>

        <?php if (($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['status']===smarty_modifier_enum("ObjectStatuses::ACTIVE"))) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"addons.update&addon=vendor_locations&selected_section=settings",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank",'but_meta'=>"shift-left"), 0);?>

        <?php }?>
    </div>
</div>
<?php }} ?>
