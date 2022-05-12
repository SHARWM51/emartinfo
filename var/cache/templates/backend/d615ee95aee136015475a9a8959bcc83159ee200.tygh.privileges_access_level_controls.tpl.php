<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:13:42
         compiled from "/home/emartinf/public_html/design/backend/templates/views/usergroups/components/privileges_access_level_controls.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251750110627b935ea43c20-33265664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd615ee95aee136015475a9a8959bcc83159ee200' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/usergroups/components/privileges_access_level_controls.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '251750110627b935ea43c20-33265664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section_id' => 0,
    'group_id' => 0,
    'hide_controls' => 0,
    'disable_full_access_level_control' => 0,
    'usergroup_id' => 0,
    'id' => 0,
    'disable_view_access_level_control' => 0,
    'show_custom_access_level_control' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b935ea55b30_18209463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b935ea55b30_18209463')) {function content_627b935ea55b30_18209463($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('privilege.full_access','privilege.view_access','privilege.no_access','privilege.custom_access'));
?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['section_id']->value)."_".((string)$_smarty_tpl->tpl_vars['group_id']->value), null, 0);?>

<div class="privileges-access-level-controls-inline<?php if ($_smarty_tpl->tpl_vars['hide_controls']->value) {?> hidden<?php }?>">
<label class="radio inline<?php if ($_smarty_tpl->tpl_vars['disable_full_access_level_control']->value) {?> privilege-access-level-control-disabled<?php }?>" for="usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_full">
    <input type="radio" name="privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" class="cm-privilege-set-access-level" id="usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_full"
           data-ca-privilege-access-level="full"
           data-ca-privilege-section-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-group-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-usergroup-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->tpl_vars['disable_full_access_level_control']->value) {?>disabled<?php }?>
    /><?php echo $_smarty_tpl->__("privilege.full_access");?>
</label>

<label class="radio inline<?php if ($_smarty_tpl->tpl_vars['disable_view_access_level_control']->value) {?> privilege-access-level-control-disabled<?php }?>" for="usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_view">
    <input type="radio" name="privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" class="cm-privilege-set-access-level" id="usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_view"
           data-ca-privilege-access-level="view"
           data-ca-privilege-section-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-group-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-usergroup-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->tpl_vars['disable_view_access_level_control']->value) {?>disabled<?php }?>
    /><?php echo $_smarty_tpl->__("privilege.view_access");?>
</label>

<label class="radio inline" for="usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_none">
    <input type="radio" name="privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" class="cm-privilege-set-access-level" id="usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_none"
           data-ca-privilege-access-level="none"
           data-ca-privilege-section-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-group-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-usergroup-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    /><?php echo $_smarty_tpl->__("privilege.no_access");?>
</label>
</div>
<?php if ($_smarty_tpl->tpl_vars['show_custom_access_level_control']->value) {?>
    <label class="radio inline" for="usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_custom">
        <input type="radio" name="privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" class="cm-privilege-set-access-level" id="usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_custom"
               data-ca-privilege-access-level="custom"
               data-ca-privilege-section-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-privilege-group-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-privilege-usergroup-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        /><?php echo $_smarty_tpl->__("privilege.custom_access");?>
</label>
<?php }?>
<?php }} ?>
