<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:08:07
         compiled from "/home/emartinf/public_html/design/backend/templates/views/categories/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:364225190627ba01f5e21f5-21339108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '236d87343fbd03ccf38f8147539f56d97d896b72' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/categories/update.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '364225190627ba01f5e21f5-21339108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
    'category_data' => 0,
    'id' => 0,
    'auth' => 0,
    'app' => 0,
    'hide_inputs' => 0,
    'storefront_id' => 0,
    'storefront_ids' => 0,
    'cat' => 0,
    'is_trash' => 0,
    'runtime' => 0,
    'view_uri' => 0,
    'settings' => 0,
    'layouts' => 0,
    'layout' => 0,
    'item' => 0,
    'categories_tree' => 0,
    'direction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba01f6a8cc3_42678250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba01f6a8cc3_42678250')) {function content_627ba01f6a8cc3_42678250($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_component')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.component.php';
if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('information','location','root_level','location','root_level','name','storefront','all_storefronts','description','edit_content_on_site','images','text_category_icon','text_category_detailed_image','seo_meta_data','page_title','meta_description','meta_keywords','availability','usergroups','to_all_subcats','position','creation_date','product_details_view','use_custom_view','product_columns','available_views','default_category_view','add_subcategory','add_product','preview','view_products','category_deletion_side_effects','delete_this_category','categories','new_category'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/backend/category_parent_selector.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("right", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("left", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['category_data']->value['category_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['category_id'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars["is_trash"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['is_trash']=='Y', null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['view_uri'] = new Smarty_variable(fn_get_preview_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl->tpl_vars['category_data']->value,$_smarty_tpl->tpl_vars['auth']->value['user_id']), null, 0);?>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['storefront_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id : $tmp), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['storefront_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['storefront_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["storefront.switcher.selected_storefront_id"] : $tmp), null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable(fn_check_form_permissions(''), null, 0);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="category_update_form" class="form-horizontal form-edit<?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?> cm-hide-inputs<?php }?>" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="category_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

<div id="content_detailed">

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"information")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("information"),'target'=>"#acc_information"), 0);?>

        <div id="acc_information" class="collapsed in">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"parent_id")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"parent_id"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group" id="parent_category_selector">
                    <?php if (fn_show_picker("categories",(defined('CATEGORY_THRESHOLD') ? constant('CATEGORY_THRESHOLD') : null))) {?>
                        <label class="control-label cm-required" for="elm_category_parent_id"><?php echo $_smarty_tpl->__("location");?>
:</label>
                        <div class="controls">
                            <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_category",'input_name'=>"category_data[parent_id]",'item_ids'=>(($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['parent_id'])===null||$tmp==='' ? "0" : $tmp),'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("root_level"),'display_input_id'=>"elm_category_parent_id",'except_id'=>$_smarty_tpl->tpl_vars['id']->value,'extra_url'=>"&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)), 0);?>

                            
                        </div>
                    <?php } else { ?>
                        <label class="control-label" for="elm_category_parent_id"><?php echo $_smarty_tpl->__("location");?>
:</label>

                        <div class="controls">
                        <select name="category_data[parent_id]" id="elm_category_parent_id">
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['parent_id']=="0") {?>selected="selected"<?php }?>>- <?php echo $_smarty_tpl->__("root_level");?>
 -</option>
                            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                                <?php $_smarty_tpl->tpl_vars['storefront_ids'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['storefront_id']->value,$_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id), null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars['storefront_ids'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['storefront_id']->value), null, 0);?>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars["cat"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["cat"]->_loop = false;
 $_from = fn_get_plain_categories_tree(0,false,(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'',$_smarty_tpl->tpl_vars['storefront_ids']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["cat"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["cat"]->key => $_smarty_tpl->tpl_vars["cat"]->value) {
$_smarty_tpl->tpl_vars["cat"]->_loop = true;
 $_smarty_tpl->tpl_vars["cat"]->index++;
 $_smarty_tpl->tpl_vars["cat"]->first = $_smarty_tpl->tpl_vars["cat"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["categories"]['first'] = $_smarty_tpl->tpl_vars["cat"]->first;
?>
                                <?php if ($_smarty_tpl->tpl_vars['cat']->value['store']) {?>
                                    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['first']) {?>
                                        </optgroup>
                                    <?php }?>
                                    <optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php } else { ?>
                                    <?php if (strpos($_smarty_tpl->tpl_vars['cat']->value['id_path'],((string)$_smarty_tpl->tpl_vars['category_data']->value['id_path'])."/")===false&&$_smarty_tpl->tpl_vars['cat']->value['category_id']!=$_smarty_tpl->tpl_vars['id']->value||!$_smarty_tpl->tpl_vars['id']->value) {?>
                                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['disabled']) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['category_data']->value['parent_id']==$_smarty_tpl->tpl_vars['cat']->value['category_id']) {?>selected="selected"<?php }?>><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['cat']->value['level']),htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['category'], ENT_QUOTES, 'UTF-8', true));?>
</option>
                                    <?php }?>
                                <?php }?>
                            <?php } ?>
                        </select>
                        </div>
                    <?php }?>
                <!--parent_category_selector--></div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"parent_id"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"category")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"category"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group">
                    <label for="elm_category_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <input type="text" name="category_data[category]" id="elm_category_name" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" <?php if ($_smarty_tpl->tpl_vars['is_trash']->value) {?>readonly="readonly"<?php }?> />
                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"category"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"storefront_id")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"storefront_id"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("storefront");?>
:</label>
                        <div class="controls">
                            <input type="hidden" name="category_data[storefront_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                            <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"category_data[storefront_id]",'picker_id'=>"elm_category_storefront_id",'item_ids'=>array($_smarty_tpl->tpl_vars['storefront_id']->value),'show_advanced'=>false,'show_empty_variant'=>fn_allowed_for("MULTIVENDOR"),'empty_variant_text'=>$_smarty_tpl->__("all_storefronts"),'allow_clear'=>true,'disabled'=>$_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['category_data']->value['parent_id']||$_smarty_tpl->tpl_vars['hide_inputs']->value||$_smarty_tpl->tpl_vars['runtime']->value['company_id']||(!$_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['storefront_id']->value&&fn_allowed_for("MULTIVENDOR")),'select_class'=>"cm-no-hide-input"), 0);?>

                        </div>
                    </div>
                <?php } elseif (fn_allowed_for("ULTIMATE")) {?>
                    <input type="hidden" name="category_data[storefront_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['storefront']->storefront_id, ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"storefront_id"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"description")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group">
                    <label class="control-label" for="elm_category_descr"><?php echo $_smarty_tpl->__("description");?>
:</label>
                    <div class="controls">
                        <textarea id="elm_category_descr" name="category_data[description]" cols="55" rows="8" class="input-large cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                            <?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['view_uri']->value), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php ob_start();
if (fn_allowed_for("ULTIMATE")) {?><?php echo "&switch_company_id=";?><?php echo (string)$_smarty_tpl->tpl_vars['category_data']->value['company_id'];?><?php }
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&frontend_url=".$_tmp1.$_tmp2,'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>"btn-default btn-live-edit cm-post",'but_target'=>"_blank"), 0);?>

                        <?php }?>
                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"status")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"category_data[status]",'id'=>"elm_category_status",'obj'=>$_smarty_tpl->tpl_vars['category_data']->value,'hidden'=>true), 0);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"status"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"images")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"images"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("images");?>
:</label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"category_main",'image_object_type'=>"category",'image_pair'=>$_smarty_tpl->tpl_vars['category_data']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'icon_text'=>$_smarty_tpl->__("text_category_icon"),'detailed_text'=>$_smarty_tpl->__("text_category_detailed_image"),'no_thumbnail'=>true), 0);?>

                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"information",'field'=>"images"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("seo_meta_data"),'target'=>"#acc_seo"), 0);?>

        <div id="acc_seo" class="collapsed in">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"page_title")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"page_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group">
                    <label class="control-label" for="elm_category_page_title"><?php echo $_smarty_tpl->__("page_title");?>
:</label>
                    <div class="controls">
                        <input type="text" name="category_data[page_title]" id="elm_category_page_title" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['page_title'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"page_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_description")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group">
                    <label class="control-label" for="elm_category_meta_description"><?php echo $_smarty_tpl->__("meta_description");?>
:</label>
                    <div class="controls">
                        <textarea name="category_data[meta_description]" id="elm_category_meta_description" cols="55" rows="4" class="input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['meta_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_keywords")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_keywords"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group">
                    <label class="control-label" for="elm_category_meta_keywords"><?php echo $_smarty_tpl->__("meta_keywords");?>
:</label>
                    <div class="controls">
                        <textarea name="category_data[meta_keywords]" id="elm_category_meta_keywords" cols="55" rows="4" class="input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['meta_keywords'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo",'field'=>"meta_keywords"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"seo"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("availability"),'target'=>"#acc_availability"), 0);?>

        <div id="acc_availability">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"usergroup_ids")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"usergroup_ids"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("usergroups");?>
:</label>
                        <div class="controls">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"ug_id",'name'=>"category_data[usergroup_ids]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H")),(defined('DESCR_SL') ? constant('DESCR_SL') : null)),'usergroup_ids'=>$_smarty_tpl->tpl_vars['category_data']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>false), 0);?>

                            <label class="checkbox" for="usergroup_to_subcats"><?php echo $_smarty_tpl->__("to_all_subcats");?>

                                <input id="usergroup_to_subcats" type="checkbox" name="category_data[usergroup_to_subcats]" value="Y" />
                            </label>
                        </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"usergroup_ids"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"position")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"position"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group">
                    <label class="control-label" for="elm_category_position"><?php echo $_smarty_tpl->__("position");?>
:</label>
                    <div class="controls">
                        <input type="text" name="category_data[position]" id="elm_category_position" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-short" />
                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"position"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"timestamp")); $_block_repeat=true; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"timestamp"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group">
                    <label class="control-label" for="elm_category_creation_date"><?php echo $_smarty_tpl->__("creation_date");?>
:</label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_category_creation_date",'date_name'=>"category_data[timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['timestamp'])===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability",'field'=>"timestamp"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"configurable_page.section",'entity'=>"categories",'tab'=>"detailed",'section'=>"availability"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<div id="content_views">
    <div id="extra">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"product.layout_input",'object'=>"category",'id'=>(($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['category_id'])===null||$tmp==='' ? 0 : $tmp),'value'=>(($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['product_details_view'])===null||$tmp==='' ? "default" : $tmp),'input_name'=>"category_data[product_details_view]",'company_id'=>$_smarty_tpl->tpl_vars['category_data']->value['company_id'])); $_block_repeat=true; echo smarty_block_component(array('name'=>"product.layout_input",'object'=>"category",'id'=>(($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['category_id'])===null||$tmp==='' ? 0 : $tmp),'value'=>(($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['product_details_view'])===null||$tmp==='' ? "default" : $tmp),'input_name'=>"category_data[product_details_view]",'company_id'=>$_smarty_tpl->tpl_vars['category_data']->value['company_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="control-group">
                <label class="control-label" for="elm_details_layout"><?php echo $_smarty_tpl->__("product_details_view");?>
:</label>
                <div class="controls">
                    #INPUT#
                </div>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"product.layout_input",'object'=>"category",'id'=>(($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['category_id'])===null||$tmp==='' ? 0 : $tmp),'value'=>(($tmp = @$_smarty_tpl->tpl_vars['category_data']->value['product_details_view'])===null||$tmp==='' ? "default" : $tmp),'input_name'=>"category_data[product_details_view]",'company_id'=>$_smarty_tpl->tpl_vars['category_data']->value['company_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <div class="control-group">
            <label class="control-label" for="elm_category_use_custom_templates"><?php echo $_smarty_tpl->__("use_custom_view");?>
:</label>
            <div class="controls">
            <input type="hidden" value="N" name="category_data[use_custom_templates]"/>
            <input type="checkbox" class="cm-toggle-checkbox" value="Y" name="category_data[use_custom_templates]" id="elm_category_use_custom_templates"<?php if ($_smarty_tpl->tpl_vars['category_data']->value['selected_views']) {?> checked="checked"<?php }?> />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_category_product_columns"><?php echo $_smarty_tpl->__("product_columns");?>
:</label>
            <div class="controls">
            <input type="text" name="category_data[product_columns]" id="elm_category_product_columns" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], ENT_QUOTES, 'UTF-8');?>
" class="cm-toggle-element" <?php if (!$_smarty_tpl->tpl_vars['category_data']->value['selected_views']) {?>disabled="disabled"<?php }?> />
            </div>
        </div>

        <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,false), null, 0);?>
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("available_views");?>
:</label>
            <div class="controls">
                <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["layout"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['layouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["layout"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                    <label class="checkbox" for="elm_category_layout_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" class="cm-combo-checkbox cm-toggle-element" name="category_data[selected_views][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_category_layout_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['category_data']->value['selected_views'][$_smarty_tpl->tpl_vars['layout']->value])||(!$_smarty_tpl->tpl_vars['category_data']->value['selected_views']&&$_smarty_tpl->tpl_vars['item']->value['active'])) {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['category_data']->value['selected_views']) {?>disabled="disabled"<?php }?> /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8');?>
</label>
                <?php } ?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_category_default_view"><?php echo $_smarty_tpl->__("default_category_view");?>
:</label>
            <div class="controls">
            <select id="elm_category_default_view" class="cm-combo-select cm-toggle-element" name="category_data[default_view]" <?php if (!$_smarty_tpl->tpl_vars['category_data']->value['selected_views']) {?>disabled="disabled"<?php }?>>
                <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["layout"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['layouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["layout"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                    <?php if (($_smarty_tpl->tpl_vars['category_data']->value['selected_views'][$_smarty_tpl->tpl_vars['layout']->value])||(!$_smarty_tpl->tpl_vars['category_data']->value['selected_views']&&$_smarty_tpl->tpl_vars['item']->value['active'])) {?>
                        <option <?php if ($_smarty_tpl->tpl_vars['category_data']->value['default_view']==$_smarty_tpl->tpl_vars['layout']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php }?>
                <?php } ?>
            </select>
            </div>
        </div>
    </div>
</div>

<div id="content_addons">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:detailed_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:detailed_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:detailed_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('url'=>"categories.update?category_id="), 0);?>


        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:update_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:update_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"categories.add?parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&category_data[storefront_id]=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value),'text'=>$_smarty_tpl->__("add_subcategory")));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"products.add?category_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'text'=>$_smarty_tpl->__("add_product")));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'target'=>"_blank",'text'=>$_smarty_tpl->__("preview"),'href'=>$_smarty_tpl->tpl_vars['view_uri']->value));?>
</li>
                <li class="divider"></li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"products.manage?cid=".((string)$_smarty_tpl->tpl_vars['id']->value),'text'=>$_smarty_tpl->__("view_products")));?>
</li>
                <li><?php ob_start();
echo $_smarty_tpl->__("category_deletion_side_effects");
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete_this_category"),'data'=>array("data-ca-confirm-text"=>$_tmp3),'href'=>"categories.delete?category_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"));?>
</li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:update_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_form'=>"category_update_form",'but_name'=>"dispatch[categories.update]",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
</form>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:update_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:update_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("categories");?>
</h6>
        <div class="nested-tree">
            <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_links_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_all'=>false,'categories_tree'=>$_smarty_tpl->tpl_vars['categories_tree']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0);?>

        </div>
    </div>
<?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:update_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'sidebar_position'=>"left",'title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['category_data']->value['category'] : $_smarty_tpl->__("new_category"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>(bool) $_smarty_tpl->tpl_vars['id']->value,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_storefront'=>fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['id']->value,'show_all_storefront'=>true,'selected_storefront_id'=>$_smarty_tpl->tpl_vars['storefront_id']->value), 0);?>

<?php }} ?>
