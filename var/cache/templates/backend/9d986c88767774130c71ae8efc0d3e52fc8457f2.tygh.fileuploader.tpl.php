<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:36:16
         compiled from "/home/emartinf/public_html/design/backend/templates/views/setup_wizard/components/fileuploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1003114296627b98a8e4fc54-99757406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d986c88767774130c71ae8efc0d3e52fc8457f2' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/setup_wizard/components/fileuploader.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1003114296627b98a8e4fc54-99757406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
    'var_name' => 0,
    'but_text' => 0,
    'id_var_name' => 0,
    'but_type' => 0,
    'required' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b98a8e601e9_53748676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b98a8e601e9_53748676')) {function content_627b98a8e601e9_53748676($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_include_ext')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.select_image','remove_this_item'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['id_var_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).$_tmp1, null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['but_text']->value) {?>
    <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable($_smarty_tpl->__("sw.select_image"), null, 0);?>
<?php }?>

<div class="sw-fileuploader clearfix"><div class="upload-file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title=""><p class="cm-fu-file hidden"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-cancel",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); Tygh.fileuploader.toggle_links(this.id, 'show');"),'icon_text'=>"&nbsp;"),$_smarty_tpl);?>
<span class="upload-filename filename-link"></span></p></div><div id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['but_type']->value==="link") {?><a class="ty-left fileinput-btn"><?php } else { ?><span class="btn ty-left fileinput-btn"><?php }?><input type="file" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); Tygh.fileuploader.toggle_links(this.id, 'hide');" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-image"),$_smarty_tpl);
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['but_type']->value==="link") {?></a><?php } else { ?></span><?php }?><input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['required']->value===smarty_modifier_enum("YesNo::YES")) {?><label for="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required hidden"></label><?php }?></div></div>

<?php }} ?>
