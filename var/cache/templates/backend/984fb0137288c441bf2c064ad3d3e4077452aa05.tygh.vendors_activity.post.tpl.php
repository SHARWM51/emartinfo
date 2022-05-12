<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:42:44
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_debt_payout/hooks/index/vendors_activity.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1266581140627b9a2cda9594-86257372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '984fb0137288c441bf2c064ad3d3e4077452aa05' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_debt_payout/hooks/index/vendors_activity.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1266581140627b9a2cda9594-86257372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'time_from' => 0,
    'time_to' => 0,
    'url' => 0,
    'dashboard_vendors_activity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9a2cdb0a30_44237513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9a2cdb0a30_44237513')) {function content_627b9a2cdb0a30_44237513($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.dashboard_suspended_vendors'));
?>
<tr>
    <td class="dashboard-vendors-activity__label">
        <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("companies.manage?time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&get_suspended=Y", null, 0);?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("vendor_debt_payout.dashboard_suspended_vendors");?>

        </a>
    </td>
    <td class="dashboard-vendors-activity__value">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['suspended_vendors'], ENT_QUOTES, 'UTF-8');?>

    </td>
</tr>
<?php }} ?>
