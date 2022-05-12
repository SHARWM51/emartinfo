<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:13:53
         compiled from "/home/emartinf/public_html/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1268659997627ba1799954d5-43780794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f79270bde6f0fd59e5df640d56fcfd0c9f1a71b9' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1268659997627ba1799954d5-43780794',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba1799ba532_49058006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba1799ba532_49058006')) {function content_627ba1799ba532_49058006($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form",'data'=>array("data-ca-bulkedit-disable-save-button"=>true)));?>

    </span>
</li>
<?php }} ?>
