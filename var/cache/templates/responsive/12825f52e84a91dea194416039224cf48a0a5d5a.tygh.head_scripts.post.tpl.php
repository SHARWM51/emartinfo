<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 06:58:45
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/google_analytics/hooks/index/head_scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1789139707627c62cdb1b497-95883760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12825f52e84a91dea194416039224cf48a0a5d5a' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/google_analytics/hooks/index/head_scripts.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1789139707627c62cdb1b497-95883760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c62cdb2a9c8_80959346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c62cdb2a9c8_80959346')) {function content_627c62cdb2a9c8_80959346($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    // Global site tag (gtag.js) - Google Analytics
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
');
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    (function(_, $) {
        // Setting up sending pageviews in Google analytics when changing the page dynamically(ajax)
        $.ceEvent('on', 'ce.history_load', function(url) {
            if (typeof(gtag) !== 'undefined') {

                // disabling page tracking by default
                gtag('config', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
', { send_page_view: false });

                // send pageview for google analytics
                gtag('event', 'page_view', {
                    page_path: url.replace('!', ''),
                    send_to: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
'
                });
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/google_analytics/hooks/index/head_scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/google_analytics/hooks/index/head_scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    // Global site tag (gtag.js) - Google Analytics
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
');
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    (function(_, $) {
        // Setting up sending pageviews in Google analytics when changing the page dynamically(ajax)
        $.ceEvent('on', 'ce.history_load', function(url) {
            if (typeof(gtag) !== 'undefined') {

                // disabling page tracking by default
                gtag('config', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
', { send_page_view: false });

                // send pageview for google analytics
                gtag('event', 'page_view', {
                    page_path: url.replace('!', ''),
                    send_to: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'UTF-8');?>
'
                });
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
