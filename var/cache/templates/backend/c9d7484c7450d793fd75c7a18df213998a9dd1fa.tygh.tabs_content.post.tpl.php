<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:03:47
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_terms/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1998671522627b9f1b351a62-89599288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d7484c7450d793fd75c7a18df213998a9dd1fa' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_terms/hooks/companies/tabs_content.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1998671522627b9f1b351a62-89599288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9f1b354c86_50159596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9f1b354c86_50159596')) {function content_627b9f1b354c86_50159596($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_terms.terms_and_conditions','vendor_terms.terms_and_conditions_tooltip'));
?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div id="content_terms_and_conditions" class="hidden">
    <div class="control-group">
        <label class="control-label" for="elm_company_terms"><?php echo $_smarty_tpl->__("vendor_terms.terms_and_conditions");?>
:</label>
        <div class="controls">
            <textarea id="elm_company_terms" name="company_data[terms]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['terms'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <p class="muted description"><?php echo $_smarty_tpl->__("vendor_terms.terms_and_conditions_tooltip");?>
</p>
        </div>
    </div>
</div>
<?php }?>
<?php }} ?>
