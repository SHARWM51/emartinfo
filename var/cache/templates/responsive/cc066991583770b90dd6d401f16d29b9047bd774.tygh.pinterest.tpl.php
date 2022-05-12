<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:29
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/social_buttons/providers/pinterest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:451600911627ba73d2014a2-85933869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc066991583770b90dd6d401f16d29b9047bd774' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/social_buttons/providers/pinterest.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '451600911627ba73d2014a2-85933869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'provider_settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73d214377_40384358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73d214377_40384358')) {function content_627ba73d214377_40384358($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['pinterest_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']) {?>
<span class="pinterest__wrapper">
    <a href="//pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['url'];?>
&amp;media=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['media'];?>
&amp;description=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['description'];?>
" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['params'];?>
><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['pinterest_size'], ENT_QUOTES, 'UTF-8');?>
.png" alt="Pinterest"></a>
</span>
<?php echo '<script'; ?>
>
    (function(_, $) {
        var event_suffix = 'pinterest';

        _.deferred_scripts.push({
            src: '//assets.pinterest.com/js/pinit.js',
            event_suffix: event_suffix
        });

        $.ceEvent('on', 'ce.lazy_script_load_' + event_suffix, function () {
            if (window.PinUtils) {
                window.PinUtils.build();
                return;
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/pinterest.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/pinterest.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['pinterest_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']) {?>
<span class="pinterest__wrapper">
    <a href="//pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['url'];?>
&amp;media=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['media'];?>
&amp;description=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['description'];?>
" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['params'];?>
><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['pinterest_size'], ENT_QUOTES, 'UTF-8');?>
.png" alt="Pinterest"></a>
</span>
<?php echo '<script'; ?>
>
    (function(_, $) {
        var event_suffix = 'pinterest';

        _.deferred_scripts.push({
            src: '//assets.pinterest.com/js/pinit.js',
            event_suffix: event_suffix
        });

        $.ceEvent('on', 'ce.lazy_script_load_' + event_suffix, function () {
            if (window.PinUtils) {
                window.PinUtils.build();
                return;
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
