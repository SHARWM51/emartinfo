<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:37:33
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/tags/views/tags/components/object_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1053953884627b98f50a6d49-16378357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '201be6f93488690753b3fdb2fa1a819b2b6fd576' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/tags/views/tags/components/object_tags.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1053953884627b98f50a6d49-16378357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
    'allow_save' => 0,
    'object' => 0,
    'tag' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b98f50b0368_10830825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98f50b0368_10830825')) {function content_627b98f50b0368_10830825($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tags'));
?>
<div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="tags") {?>hidden<?php }?>" id="content_tags">

<?php echo smarty_function_script(array('src'=>"js/addons/tags/tags_autocomplete.js"),$_smarty_tpl);?>


    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php }?>">
        <label class="control-label"><?php echo $_smarty_tpl->__("tags");?>
:</label>
        <div class="controls">
            <ul id="my_tags">
                <textarea name="my_tags_values" data-ca-tags="myTagsValues" class="hidden-accessible"><?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['tag']->last) {?>

<?php }
} ?></textarea>
                <input type="hidden" id="object_id" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
 />
                <input type="hidden" id="object_type" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
 />
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[tags][]" value="" />
                <input type="hidden" id="object_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[tags][]" />
                <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["tag"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["tag"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
 $_smarty_tpl->tpl_vars["tag"]->iteration++;
 $_smarty_tpl->tpl_vars["tag"]->last = $_smarty_tpl->tpl_vars["tag"]->iteration === $_smarty_tpl->tpl_vars["tag"]->total;
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li><?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php }} ?>
