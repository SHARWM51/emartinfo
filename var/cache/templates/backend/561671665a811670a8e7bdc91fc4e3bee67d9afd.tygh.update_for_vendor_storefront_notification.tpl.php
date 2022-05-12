<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:47
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/update_for_vendor_storefront_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1024176381627b9f1b319f75-37487847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '561671665a811670a8e7bdc91fc4e3bee67d9afd' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/update_for_vendor_storefront_notification.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1024176381627b9f1b319f75-37487847',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f1b31d001_27451993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f1b31d001_27451993')) {function content_627b9f1b31d001_27451993($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.storefronts_update_for_vendor.title','vendor_plans.storefronts_update_for_vendor.general_message','vendor_plans.storefronts_update_for_vendor.add_storefronts_message','vendor_plans.storefronts_update_for_vendor.remove_storefronts_message'));
?>
<div class="hidden alert alert-block" data-ca-vendor-plans="updateVendorStorefrontVendorsNotification">

    <h4>
        <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.title");?>

    </h4>

    <div>
        <div>
            <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.general_message");?>

        </div>

        <div>
            <div data-ca-vendor-plans="updateVendorStorefrontVendorsAddNotification">
                <label class="checkbox">
                    <input type="checkbox" name="company_data[add_vendor_to_new_storefronts]">
                    <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.add_storefronts_message");?>

                </label>
            </div>

            <div data-ca-vendor-plans="updateVendorStorefrontVendorsRemoveNotification">
                <label class="checkbox">
                    <input type="checkbox" name="company_data[remove_vendor_from_old_storefronts]">
                    <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.remove_storefronts_message");?>

                </label>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
