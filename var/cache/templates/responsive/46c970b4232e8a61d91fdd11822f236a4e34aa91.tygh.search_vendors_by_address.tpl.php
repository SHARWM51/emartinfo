<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 07:19:21
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/vendor_locations/blocks/companies_catalog/search_vendors_by_address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:702163881627c67a1016f27-18652118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46c970b4232e8a61d91fdd11822f236a4e34aa91' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/vendor_locations/blocks/companies_catalog/search_vendors_by_address.tpl',
      1 => 1652319310,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '702163881627c67a1016f27-18652118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'form_name' => 0,
    'filter_uid' => 0,
    'collapse' => 0,
    'filter' => 0,
    'reset_url' => 0,
    'ajax_div_ids' => 0,
    'block' => 0,
    'input_field_data_id' => 0,
    'geocomplete_type' => 0,
    'vendors_search_location_place_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c67a106caa2_07192677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c67a106caa2_07192677')) {function content_627c67a106caa2_07192677($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_location.search_vendors_geolocation','clear','choose','reset','vendor_location.search_vendors_geolocation','clear','choose','reset'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['form_name'] = new Smarty_variable("search_vendors_by_address_form", null, 0);?>

<form name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_name']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="search-by-geodata">
    <input type="hidden" name="dispatch" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-product-filters__wrapper">
        <div class="ty-product-filters__block">
            <div id="sw_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__switch cm-combination-filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['collapse']->value) {?> open<?php }?> cm-save-state <?php if ($_smarty_tpl->tpl_vars['filter']->value['display']=="Y") {?>cm-ss-reverse<?php }?>">
                <span class="ty-product-filters__title"><?php echo $_smarty_tpl->__("vendor_location.search_vendors_geolocation");
if ($_smarty_tpl->tpl_vars['reset_url']->value) {?><a class="cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-scroll=".ty-mainbox-title"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle"),$_smarty_tpl);?>
</a><?php }?></span>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-product-filters__switch-down"),$_smarty_tpl);?>

                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-product-filters__switch-right"),$_smarty_tpl);?>

            </div>
            <div class="ty-product-filters <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">
                <div class="ty-product-filters__search ty-filter-products-by-geolocation-filter-address">
                    <input type="text"
                        id="vendor_search_geolocation_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
                        class="cm-geocomplete ty-input-text-medium cm-filter-vendor-by-geolocation-input"
                        data-ca-field-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_field_data_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-geocomplete-type="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['geocomplete_type']->value)===null||$tmp==='' ? "(cities)" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-geocomplete-place-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendors_search_location_place_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-geocomplete-value-elem-id="elm_vendor_search_geolocation_value_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-filter-type="region"
                        value=""
                    >
                    <input id="elm_vendor_search_geolocation_value_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
                    type="hidden"
                    name="location_filter"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['location_hash'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-product-filters__search-icon hidden",'id'=>"elm_search_clear_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value),'title'=>$_smarty_tpl->__("clear")),$_smarty_tpl);?>

                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-target cm-filter-geolocation-use-my-location-button ty-vendors-locations-use-my-location",'data'=>array("data-ca-filter-geocomplete-elem-id"=>"vendor_search_geolocation_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id']))),$_smarty_tpl);?>

                </div>

                <button class="hidden set-distance ty-btn"><?php echo $_smarty_tpl->__("choose");?>
</button>
            </div>
        </div>

        <div class="ty-product-filters__tools clearfix">
            <a href="<?php echo htmlspecialchars(fn_url("companies.catalog"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-product-filters__reset-button"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cw ty-product-filters__reset-icon"),$_smarty_tpl);
echo $_smarty_tpl->__("reset");?>
</a>
        </div>
    </div>
    
    <input type="submit" name="dispatch" value="companies.catalog" class="hidden">
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_locations/blocks/companies_catalog/search_vendors_by_address.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_locations/blocks/companies_catalog/search_vendors_by_address.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['form_name'] = new Smarty_variable("search_vendors_by_address_form", null, 0);?>

<form name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_name']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="search-by-geodata">
    <input type="hidden" name="dispatch" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-product-filters__wrapper">
        <div class="ty-product-filters__block">
            <div id="sw_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__switch cm-combination-filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['collapse']->value) {?> open<?php }?> cm-save-state <?php if ($_smarty_tpl->tpl_vars['filter']->value['display']=="Y") {?>cm-ss-reverse<?php }?>">
                <span class="ty-product-filters__title"><?php echo $_smarty_tpl->__("vendor_location.search_vendors_geolocation");
if ($_smarty_tpl->tpl_vars['reset_url']->value) {?><a class="cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-scroll=".ty-mainbox-title"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle"),$_smarty_tpl);?>
</a><?php }?></span>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-product-filters__switch-down"),$_smarty_tpl);?>

                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-product-filters__switch-right"),$_smarty_tpl);?>

            </div>
            <div class="ty-product-filters <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">
                <div class="ty-product-filters__search ty-filter-products-by-geolocation-filter-address">
                    <input type="text"
                        id="vendor_search_geolocation_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
                        class="cm-geocomplete ty-input-text-medium cm-filter-vendor-by-geolocation-input"
                        data-ca-field-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_field_data_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-geocomplete-type="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['geocomplete_type']->value)===null||$tmp==='' ? "(cities)" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-geocomplete-place-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendors_search_location_place_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-geocomplete-value-elem-id="elm_vendor_search_geolocation_value_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-filter-type="region"
                        value=""
                    >
                    <input id="elm_vendor_search_geolocation_value_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"
                    type="hidden"
                    name="location_filter"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['location_hash'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-product-filters__search-icon hidden",'id'=>"elm_search_clear_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value),'title'=>$_smarty_tpl->__("clear")),$_smarty_tpl);?>

                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-target cm-filter-geolocation-use-my-location-button ty-vendors-locations-use-my-location",'data'=>array("data-ca-filter-geocomplete-elem-id"=>"vendor_search_geolocation_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id']))),$_smarty_tpl);?>

                </div>

                <button class="hidden set-distance ty-btn"><?php echo $_smarty_tpl->__("choose");?>
</button>
            </div>
        </div>

        <div class="ty-product-filters__tools clearfix">
            <a href="<?php echo htmlspecialchars(fn_url("companies.catalog"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-product-filters__reset-button"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cw ty-product-filters__reset-icon"),$_smarty_tpl);
echo $_smarty_tpl->__("reset");?>
</a>
        </div>
    </div>
    
    <input type="submit" name="dispatch" value="companies.catalog" class="hidden">
</form>
<?php }?><?php }} ?>
