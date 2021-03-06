<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:39:45
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/geo_maps/components/map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2047877287627bb5994c9cb3-63580239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af5a648be4090dbddf8a2b4caa1ac16e52d38ae' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/geo_maps/components/map.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2047877287627bb5994c9cb3-63580239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'provider' => 0,
    'api_key' => 0,
    'yandex_commercial' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb599520716_54298728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb599520716_54298728')) {function content_627bb599520716_54298728($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_style(array('src'=>"addons/geo_maps/styles.css"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/maps.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/code.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/locate.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['provider']->value==="yandex") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/index.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/maps.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/code.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/yandex/locate.js"),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['provider']->value==="google") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/index.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/maps.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/code.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/provider/google/locate.js"),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/func.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function (_, $) {
        _.geo_maps = {
            provider: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['provider']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            api_key: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['api_key']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            yandex_commercial: <?php if ($_smarty_tpl->tpl_vars['yandex_commercial']->value===smarty_modifier_enum("YesNo::YES")) {?>true<?php } else { ?>false<?php }?>,
            language: "<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
",
        };
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="geo-map__map-container">
    <div class="cm-geo-map-container cm-aom-map-container geo-map-iframe-container"
         data-ca-geo-map-language="<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-aom-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_country'], ENT_QUOTES, 'UTF-8');?>
"
         data-ca-aom-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_city'], ENT_QUOTES, 'UTF-8');?>
"
         data-ca-aom-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_address'], ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-map-controls-enable-zoom="true"
         data-ca-geo-map-controls-enable-layers="true"
         data-ca-geo-map-behaviors-enable-drag="true"
         data-ca-geo-map-behaviors-enable-drag-on-mobile="false"
         data-ca-geo-map-behaviors-enable-smart-drag="true"
         data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
         data-ca-geo-map-behaviors-enable-multi-touch="true"
    ></div>
</div>
<?php }} ?>
