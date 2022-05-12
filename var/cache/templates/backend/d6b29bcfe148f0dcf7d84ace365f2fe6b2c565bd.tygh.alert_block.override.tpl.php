<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:42:44
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_debt_payout/hooks/index/alert_block.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1626934317627b9a2ccfacf5-98492848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6b29bcfe148f0dcf7d84ace365f2fe6b2c565bd' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_debt_payout/hooks/index/alert_block.override.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1626934317627b9a2ccfacf5-98492848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dashboard_alert' => 0,
    'is_block_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9a2cd00170_87682603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9a2cd00170_87682603')) {function content_627b9a2cd00170_87682603($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dashboard_alert']->value) {?>
    <div class="alert alert-block <?php if ($_smarty_tpl->tpl_vars['is_block_alert']->value) {?>alert-error debt-notification<?php }?>">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['dashboard_alert']->value;?>

        </div>
    </div>
<?php }?><?php }} ?>
