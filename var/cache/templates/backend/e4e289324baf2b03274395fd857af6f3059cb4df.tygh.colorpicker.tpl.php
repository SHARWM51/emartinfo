<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:08:07
         compiled from "/home/emartinf/public_html/design/backend/templates/views/theme_editor/components/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:972412873627ba01f8216f6-31679946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e289324baf2b03274395fd857af6f3059cb4df' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/theme_editor/components/colorpicker.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '972412873627ba01f8216f6-31679946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_id' => 0,
    'cp_name' => 0,
    'cp_value' => 0,
    'cp_storage' => 0,
    'cp_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba01f826df3_78395253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba01f826df3_78395253')) {function content_627ba01f826df3_78395253($_smarty_tpl) {?><div class="input-prepend">
    <?php $_smarty_tpl->tpl_vars['cp_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['cp_id']->value)===null||$tmp==='' ? "cp_".((string)$_smarty_tpl->tpl_vars['cp_name']->value) : $tmp), null, 0);?>
    <input type="text" maxlength="7" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp_storage']->value) {?>data-ca-storage="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_storage']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_class']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_class']->value, ENT_QUOTES, 'UTF-8');
}?>" />
</div><?php }} ?>
