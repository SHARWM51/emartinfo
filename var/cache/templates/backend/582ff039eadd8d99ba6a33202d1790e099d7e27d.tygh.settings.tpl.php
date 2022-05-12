<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:36:16
         compiled from "/home/emartinf/public_html/design/backend/templates/views/setup_wizard/components/tabs/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16034851627b98a8e6be37-46325961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582ff039eadd8d99ba6a33202d1790e099d7e27d' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/setup_wizard/components/tabs/settings.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16034851627b98a8e6be37-46325961',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b98a8e71cc3_22961602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98a8e71cc3_22961602')) {function content_627b98a8e71cc3_22961602($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.admin_notifications','sw.configure','sw.vendor_notifications','sw.configure'));
?>
<div id="sw_settings_extra">
    <div class="sw-columns-block">
        <div class="form-horizontal">
            <div class="control-icon sw_notifications_icon"></div>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("sw.admin_notifications");?>
:</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"notification_settings.manage?receiver_type=A",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0);?>

                </div>
            </div>
        </div>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <div class="form-horizontal">
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("sw.vendor_notifications");?>
:</label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"notification_settings.manage?receiver_type=V",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0);?>

                    </div>
                </div>
            </div>
        <?php }?>
    </div>
<!--sw_settings_extra--></div>
<?php }} ?>
