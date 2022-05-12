<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:13:59
         compiled from "/home/emartinf/public_html/design/backend/templates/views/categories/m_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1430880610627ba17fdcd0d9-82242038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a89d1f7e4a710c3a6951cfd006f2b3faf88f82' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/categories/m_add.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1430880610627ba17fdcd0d9-82242038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'runtime' => 0,
    'storefront_id' => 0,
    'storefront_ids' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba17fe189e2_62503403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba17fe189e2_62503403')) {function content_627ba17fe189e2_62503403($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('category_location','category_name','vendor','storefront','usergroup','position','status','category_location','root_level','root_level','category_name','vendor','storefront','all_storefronts','usergroup','usergroup','position','status','active','hidden','disabled','tools','add_categories'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value["storefront.switcher.selected_storefront_id"], null, 0);?>
    <?php }?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="categories_m_addition_form">

<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table--relative table-responsive">
    <thead>
    <tr class="cm-first-sibling">
        <th width="15%"><?php echo $_smarty_tpl->__("category_location");?>
</th>
        <th width="15%"><?php echo $_smarty_tpl->__("category_name");?>
</th>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
            <th width="15%"><?php if (fn_allowed_for("ULTIMATE")) {
echo $_smarty_tpl->__("vendor");
} else {
echo $_smarty_tpl->__("storefront");
}?></th>
        <?php } elseif (fn_allowed_for("ULTIMATE")) {?>
            <th class="hide"></th>
        <?php }?>
        <th width="15%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
        <th width="10%"><?php echo $_smarty_tpl->__("position");?>
</th>
        <th width="15%"><?php echo $_smarty_tpl->__("status");?>
</th>
        <th width="7%">&nbsp;</th>
    </tr>
    </thead>
    <tr id="box_new_cat_tag">
        <td data-th="<?php echo $_smarty_tpl->__("category_location");?>
">
            <?php if (fn_show_picker("categories",(defined('CATEGORY_THRESHOLD') ? constant('CATEGORY_THRESHOLD') : null))) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_category",'input_name'=>"categories_data[0][parent_id]",'item_ids'=>0,'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("root_level"),'extra_url'=>"&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)), 0);?>

            <?php } else { ?>
                <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                    <?php $_smarty_tpl->tpl_vars['storefront_ids'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['storefront_id']->value), null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['storefront_ids'] = new Smarty_variable(null, null, 0);?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"categories_data[0][parent_id]",'select_class'=>"input-medium",'root_text'=>$_smarty_tpl->__("root_level"),'id'=>'','storefront_ids'=>$_smarty_tpl->tpl_vars['storefront_ids']->value), 0);?>

            <?php }?>
        </td>
        <td data-th="<?php echo $_smarty_tpl->__("category_name");?>
">
            <input class="span3" type="text" name="categories_data[0][category]" size="40" value="" />
        </td>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <td data-th="<?php echo $_smarty_tpl->__("vendor");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"categories_data[0][company_id]",'id'=>"categories_data_company_id_0",'no_wrap'=>true), 0);?>

                </td>
            <?php } else { ?>
                <td data-th="<?php echo $_smarty_tpl->__("storefront");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['storefront_id']->value) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['storefront']->name, ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("all_storefronts");?>

                    <?php }?>
                    <input type="hidden" name="categories_data[0][storefront_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                </td>
            <?php }?>
        <?php } elseif (fn_allowed_for("ULTIMATE")) {?>
            <td class="hide">
                <input type="hidden" name="categories_data[0][storefront_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </td>
        <?php }?>

        <td data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"ship_data_".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']),'select_mode'=>true,'title'=>$_smarty_tpl->__("usergroup"),'name'=>"categories_data[0][usergroup_ids]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H")),(defined('DESCR_SL') ? constant('DESCR_SL') : null)),'input_extra'=>''), 0);?>

        </td>
        <td data-th="<?php echo $_smarty_tpl->__("position");?>
">
            <input class="input-micro" type="text" name="categories_data[0][position]" size="3" value="" />
        </td>
        <td data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <select name="categories_data[0][status]" class="input-small">
                <option value="A"><?php echo $_smarty_tpl->__("active");?>
</option>
                <option value="H"><?php echo $_smarty_tpl->__("hidden");?>
</option>
                <option value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        </td>
        <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"new_cat_tag",'on_add'=>"fn_calculate_usergroups(Tygh."."$"."(this).next('tr'));"), 0);?>

        </td>
    </tr>
    </table>
</div>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[categories.m_add]",'but_role'=>"submit-link",'but_target_form'=>"categories_m_addition_form"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("add_categories"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_storefront'=>true,'show_all_storefront'=>true,'selected_storefront_id'=>$_smarty_tpl->tpl_vars['storefront_id']->value), 0);?>

<?php }} ?>
