<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:42:44
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_data_premoderation/hooks/index/products_statistic.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1293390812627b9a2cd76bd4-73726586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078b791c6a165e864e0fb897e4976fe63f145d2c' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_data_premoderation/hooks/index/products_statistic.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1293390812627b9a2cd76bd4-73726586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_data_premoderation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9a2cd84b26_99095816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9a2cd84b26_99095816')) {function content_627b9a2cd84b26_99095816($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.require_approval','vendor_data_premoderation.disapproved'));
?>
<?php if (isset($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count'])) {?>
<div class="dashboard-card">
    <div class="dashboard-card-title">
        <?php echo $_smarty_tpl->__("vendor_data_premoderation.require_approval");?>

    </div>
    <div class="dashboard-card-content">
        <h3>
            <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.manage?status=".$_tmp2), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count']), ENT_QUOTES, 'UTF-8');?>

            </a>
        </h3>
    </div>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count'])) {?>
<div class="dashboard-card">
    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproved");?>
</div>
    <div class="dashboard-card-content">
        <h3>
            <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.manage?status=".$_tmp3), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count']), ENT_QUOTES, 'UTF-8');?>

            </a>
        </h3>
    </div>
</div>
<?php }?>
<?php }} ?>
