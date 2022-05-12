<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:41:35
         compiled from "/home/emartinf/public_html/design/backend/templates/views/block_manager/components/new_blocks_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1887499705627ba7f78eb782-25532937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27c406ed5d7e06322e2319e800c46f77505232bc' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/block_manager/components/new_blocks_list.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1887499705627ba7f78eb782-25532937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_types' => 0,
    'block' => 0,
    'purpose' => 0,
    'manage' => 0,
    'type' => 0,
    'grid_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba7f78fa015_39001753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba7f78fa015_39001753')) {function content_627ba7f78fa015_39001753($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/emartinf/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars["block"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["block"]->_loop = false;
 $_smarty_tpl->tpl_vars["type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['block_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["block"]->key => $_smarty_tpl->tpl_vars["block"]->value) {
$_smarty_tpl->tpl_vars["block"]->_loop = true;
 $_smarty_tpl->tpl_vars["type"]->value = $_smarty_tpl->tpl_vars["block"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['is_manageable']) {?>
        <div class="select-block <?php if ($_smarty_tpl->tpl_vars['purpose']->value==="wysiwyg") {?>cm-create-bm-block<?php } else { ?>cm-add-block bm-action-new-block<?php }?> <?php if ($_smarty_tpl->tpl_vars['manage']->value=="Y") {?>bm-manage<?php }?>"
             data-ca-block-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-block-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <input type="hidden" name="block_data[type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="block_data[grid_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

            <div class="select-block-box">
                <div class="bmicon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"></div>
            </div>

            <div class="select-block-description">
                <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],20,"...",true), ENT_QUOTES, 'UTF-8', true),'...','&hellip;');?>
</strong>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
        </div>
    <?php }?>
<?php } ?>
<?php }} ?>
