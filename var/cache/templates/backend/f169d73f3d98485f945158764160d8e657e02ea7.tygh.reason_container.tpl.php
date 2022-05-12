<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:41
         compiled from "/home/emartinf/public_html/design/backend/templates/views/companies/components/reason_container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1464904202627b9f15776c84-38307799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f169d73f3d98485f945158764160d8e657e02ea7' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/companies/components/reason_container.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1464904202627b9f15776c84-38307799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'mandatory_notification' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f1577a453_66039730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f1577a453_66039730')) {function content_627b9f1577a453_66039730($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('reason','notify_vendors_by_email'));
?>
<div class="form-horizontal form-edit">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("reason");?>
</label>
    <div class="controls">
    <textarea class="span9" name="reason_change_to_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
" id="reason_change_to_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4"></textarea>
    </div>
</div>

<div class="cm-toggle-button">
    <div class="control-group notify-customer">
        <div class="controls">
        <label for="action_notification" class="checkbox">
        <input type="hidden" name="action_notification" value="N" />
        <input type="checkbox" name="action_notification" id="action_notification" value="Y" checked="checked" <?php if ($_smarty_tpl->tpl_vars['mandatory_notification']->value) {?>disabled="disabled"<?php }?> />
        <?php echo $_smarty_tpl->__("notify_vendors_by_email");?>
</label>
        </div>
    </div>
</div>
</div><?php }} ?>
