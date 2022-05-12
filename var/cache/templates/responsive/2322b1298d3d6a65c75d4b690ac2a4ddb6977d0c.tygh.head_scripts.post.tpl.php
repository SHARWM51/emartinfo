<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 06:57:37
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/facebook_pixel/hooks/index/head_scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1951982135627c6289b030d2-28829994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2322b1298d3d6a65c75d4b690ac2a4ddb6977d0c' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/facebook_pixel/hooks/index/head_scripts.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1951982135627c6289b030d2-28829994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'fb_track_order_placed_event' => 0,
    'fb_order_total' => 0,
    'primary_currency' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c6289b3d553_20386226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c6289b3d553_20386226')) {function content_627c6289b3d553_20386226($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['facebook_pixel']['pixel_id']) {?>
<?php echo '<script'; ?>
>
    !function(f,b,e,v,n,t,s)
            { if(f.fbq)return;n=f.fbq=function(){ n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.agent='plcscart';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['addons']->value['facebook_pixel']['pixel_id'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
');
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['facebook_pixel']['track_all_page_views']===smarty_modifier_enum("YesNo::YES")) {?>
        fbq('track', 'PageView');
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['facebook_pixel']['track_order_placed']===smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['fb_track_order_placed_event']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['fb_order_total']->value) {?>
            fbq('track', 'Order Placed', {currency: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['primary_currency']->value, ENT_QUOTES, 'UTF-8');?>
", value: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fb_order_total']->value, ENT_QUOTES, 'UTF-8');?>
});
        <?php } else { ?>
            fbq('track', 'Order Placed');
        <?php }?>
    <?php }?>
<?php echo '</script'; ?>
>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['addons']->value['facebook_pixel']['pixel_id']), ENT_QUOTES, 'UTF-8');?>
&ev=PageView&noscript=1";
    />
</noscript>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/facebook_pixel/hooks/index/head_scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/facebook_pixel/hooks/index/head_scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['facebook_pixel']['pixel_id']) {?>
<?php echo '<script'; ?>
>
    !function(f,b,e,v,n,t,s)
            { if(f.fbq)return;n=f.fbq=function(){ n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.agent='plcscart';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['addons']->value['facebook_pixel']['pixel_id'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
');
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['facebook_pixel']['track_all_page_views']===smarty_modifier_enum("YesNo::YES")) {?>
        fbq('track', 'PageView');
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['facebook_pixel']['track_order_placed']===smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['fb_track_order_placed_event']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['fb_order_total']->value) {?>
            fbq('track', 'Order Placed', {currency: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['primary_currency']->value, ENT_QUOTES, 'UTF-8');?>
", value: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fb_order_total']->value, ENT_QUOTES, 'UTF-8');?>
});
        <?php } else { ?>
            fbq('track', 'Order Placed');
        <?php }?>
    <?php }?>
<?php echo '</script'; ?>
>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['addons']->value['facebook_pixel']['pixel_id']), ENT_QUOTES, 'UTF-8');?>
&ev=PageView&noscript=1";
    />
</noscript>
<?php }?>
<?php }?><?php }} ?>
