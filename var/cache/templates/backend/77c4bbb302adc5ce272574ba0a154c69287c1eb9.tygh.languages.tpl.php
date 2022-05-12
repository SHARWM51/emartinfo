<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:00:53
         compiled from "/home/emartinf/public_html/design/backend/templates/views/storefronts/components/languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2145384628627bac7d506f53-77596498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77c4bbb302adc5ce272574ba0a154c69287c1eb9' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/storefronts/components/languages.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2145384628627bac7d506f53-77596498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'is_localization_picker_allowed' => 0,
    'all_language_ids' => 0,
    'all_languages' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bac7d511509_52127944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bac7d511509_52127944')) {function content_627bac7d511509_52127944($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('languages'));
?>


<div class="control-group">
    <label for="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("languages");?>

    </label>
    <div class="controls" id="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['is_localization_picker_allowed']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"storefront_data[languages]",'input_id'=>"storefront_language",'item_ids'=>$_smarty_tpl->tpl_vars['all_language_ids']->value,'items'=>$_smarty_tpl->tpl_vars['all_languages']->value,'id_field'=>"lang_id",'name_field'=>"name",'storefront_id'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>"languages",'load_items_url'=>"languages.selector?storefront_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'class_prefix'=>"localization",'close_on_select'=>"false"), 0);?>

        <?php } else { ?>
            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['language']->value['lang_id'],$_smarty_tpl->tpl_vars['all_language_ids']->value)) {?>
                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</p>
                <?php }?>
            <?php } ?>
        <?php }?>
    </div>
</div>
<?php }} ?>
