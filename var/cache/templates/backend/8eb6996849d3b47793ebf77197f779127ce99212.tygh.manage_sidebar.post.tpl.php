<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:02:00
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/geo_maps/hooks/profile/manage_sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:486726620627bacc0e9e073-49479453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb6996849d3b47793ebf77197f779127ce99212' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/geo_maps/hooks/profile/manage_sidebar.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '486726620627bacc0e9e073-49479453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'settings' => 0,
    'show_move_map_mobile_hint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bacc0ea7481_05563551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bacc0ea7481_05563551')) {function content_627bacc0ea7481_05563551($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.shipping_address_on_map','store_locator.use_two_fingers_for_move_map','no_data'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_id']&&$_smarty_tpl->tpl_vars['user_data']->value['user_type']=='C') {?>
    <div class="sidebar-row">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider']==="yandex") {?>
            <?php $_smarty_tpl->tpl_vars['show_move_map_mobile_hint'] = new Smarty_variable(true, null, 0);?>
        <?php }?>
        <h6><?php echo $_smarty_tpl->__("geo_maps.shipping_address_on_map");?>
</h6>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
            <div class="geo-map__map-container">
                <div class="cm-geo-map-container cm-aom-map-container"
                    data-ca-geo-map-controls-enable-zoom="true"
                    data-ca-geo-map-controls-enable-fullscreen="true"
                    data-ca-geo-map-controls-enable-layers="true"
                    data-ca-geo-map-controls-enable-ruler="true"
                    data-ca-geo-map-behaviors-enable-drag="true"
                    data-ca-geo-map-behaviors-enable-drag-on-mobile="false"
                    data-ca-geo-map-behaviors-enable-smart-drag="true"
                    data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
                    data-ca-geo-map-behaviors-enable-multi-touch="true"
                    data-ca-geo-map-language="<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-aom-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-aom-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-aom-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
"
                ></div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['show_move_map_mobile_hint']->value) {?>
                <div class="mobile-visible muted"><?php echo $_smarty_tpl->__("store_locator.use_two_fingers_for_move_map");?>
</div>
            <?php }?>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    </div>
<?php }?>
<?php }} ?>
