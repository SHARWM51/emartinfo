<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:47
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/ab__stickers/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1869804825627b9f1b37a3c6-93483791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00f8834b90636c4200e3a315ddf0fce405745763' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/ab__stickers/hooks/companies/tabs_content.post.tpl',
      1 => 1652264562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1869804825627b9f1b37a3c6-93483791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'ab__stickers' => 0,
    'c_url' => 0,
    'search' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'sticker' => 0,
    'status' => 0,
    'company_data' => 0,
    'tag' => 0,
    'change_status_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f1b3a1995_24239664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f1b3a1995_24239664')) {function content_627b9f1b3a1995_24239664($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__stickers.added_by_addon','id','position_short','name','ab__stickers.params.type','status','id','position_short','name','ab__stickers.params.type','ab__stickers.params.type.','status','active','disabled','no_data'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['enable_for_vendors']==smarty_modifier_enum("YesNo::YES")&&(fn_check_view_permissions('ab__stickers.view','GET')||$_smarty_tpl->tpl_vars['addons']->value['vendor_privileges']['status']!=smarty_modifier_enum("ObjectStatuses::ACTIVE"))) {?>
<div id="content_ab__stickers" class="hidden">
<p class="muted"><?php echo $_smarty_tpl->__("ab__stickers.added_by_addon");?>
</p>
<?php if ($_smarty_tpl->tpl_vars['ab__stickers']->value) {?>
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive">
<thead>
<tr>
<th width="2%" class="mobile-hide"><?php echo $_smarty_tpl->__("id");?>
</th>
<th width="2%" class="mobile-hide"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=position&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents_stickers"><?php echo $_smarty_tpl->__("position_short");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="position") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<th width="21%" class="mobile-hide"></th>
<th width="30%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name_for_admin&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents_stickers"><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<th width="25%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=type&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents_stickers"><?php echo $_smarty_tpl->__("ab__stickers.params.type");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="type") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<th width="7%" class="right mobile-hide">&nbsp;</th>
<th width="13%" class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents_stickers"><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
</tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['sticker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sticker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__stickers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sticker']->key => $_smarty_tpl->tpl_vars['sticker']->value) {
$_smarty_tpl->tpl_vars['sticker']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['sticker']->value['vendor_status'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['sticker']->value['status'] : $tmp), null, 0);?>
<tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
<td data-th="<?php echo $_smarty_tpl->__("id");?>
" class="muted mobile-hide ty-center">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->value['sticker_id'], ENT_QUOTES, 'UTF-8');?>
</td>
<td data-th="<?php echo $_smarty_tpl->__("position_short");?>
" class="mobile-hide ty-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->value['position'], ENT_QUOTES, 'UTF-8');?>
</td>
<td class="mobile-hide ty-center">
<?php echo $_smarty_tpl->getSubTemplate ("addons/ab__stickers/views/ab__stickers/components/sticker_preview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_link'=>true), 0);?>

</td>
<td data-th="<?php echo $_smarty_tpl->__("name");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sticker']->value['name_for_admin'], ENT_QUOTES, 'UTF-8');?>
</td>
<td data-th="<?php echo $_smarty_tpl->__("ab__stickers.params.type");?>
"><?php echo $_smarty_tpl->__("ab__stickers.params.type.".((string)$_smarty_tpl->tpl_vars['sticker']->value['type']));?>
</td>
<td></td>
<td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
<?php $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable("a", null, 0);?>
<?php if ((!fn_check_view_permissions("ab__stickers.edit","POST"))&&$_smarty_tpl->tpl_vars['addons']->value['vendor_privileges']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
<?php $_smarty_tpl->tpl_vars['tag'] = new Smarty_variable("span", null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['change_status_href'] = new Smarty_variable("ab__stickers.change_vendor_status?sticker_id=".((string)$_smarty_tpl->tpl_vars['sticker']->value['sticker_id'])."&company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id'])."&result_ids=content_ab__stickers", null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="cm-post" data-ca-target-id="content_ab__stickers" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['change_status_href']->value)."&status=D"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("active");?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
>
<?php } else { ?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="cm-post" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['change_status_href']->value)."&status=A"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("disabled");?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
>
<?php }?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
<!--content_ab__stickers--></div>
<?php }?>
<?php }} ?>
