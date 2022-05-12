<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:38:44
         compiled from "/home/emartinf/public_html/design/backend/templates/views/addons/components/manage/addon_name_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1918935820627bb55cb9df38-19619083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6776a975f055f8a14b5a7b2b3cd6d5e3749e7fa9' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/addons/components/manage/addon_name_search.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1918935820627bb55cb9df38-19619083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb55cba3841_72148916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb55cba3841_72148916')) {function content_627bb55cba3841_72148916($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','remove','addons.search_description'));
?>
<div class="sidebar-row addons-addon-name-search">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
 form--no-margin">
        <div class="controls">
            <input type="text"
                name="q"
                id="elm_addon"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
"
                autofocus
                class="input-full input--no-margin"
                placeholder="<?php echo $_smarty_tpl->__("admin_search_field");?>
"
            />
            <button type="button" class="hidden addons-addon-name-search__remove" id="elm_addon_clear" title="<?php echo $_smarty_tpl->__("remove");?>
">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-remove"),$_smarty_tpl);?>

            </button>
        </div>
    </form>
    <div class="muted description">
        <?php echo $_smarty_tpl->__("addons.search_description");?>

    </div>
</div>
<?php }} ?>
