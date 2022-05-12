<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:41
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_th.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:953469772627b9f1570ef12-27513075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3e32a065e4937ce235710ac921e1abaeda5676' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_th.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '953469772627b9f1570ef12-27513075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'search' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f157150b6_30458654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f157150b6_30458654')) {function content_627b9f157150b6_30458654($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.absolute_vendor_rating','vendor_rating.absolute_vendor_rating_short'));
?>
<th width="19%">
    <a class="cm-ajax"
       href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=absolute_vendor_rating&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
       data-ca-target-id="pagination_contents"
       title="<?php echo $_smarty_tpl->__("vendor_rating.absolute_vendor_rating");?>
"
    >
        <?php echo $_smarty_tpl->__("vendor_rating.absolute_vendor_rating_short");?>

        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="absolute_vendor_rating") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
    </a>
</th>
<?php }} ?>
