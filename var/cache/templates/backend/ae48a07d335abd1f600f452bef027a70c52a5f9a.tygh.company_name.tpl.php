<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:13:47
         compiled from "/home/emartinf/public_html/design/backend/templates/views/companies/components/company_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1988226842627b93637b8113-93223138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae48a07d335abd1f600f452bef027a70c52a5f9a' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/companies/components/company_name.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1988226842627b93637b8113-93223138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'show_hidden_input' => 0,
    '_company_name' => 0,
    'auth' => 0,
    'simple' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b93637c50e8_62466425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b93637c50e8_62466425')) {function content_627b93637c50e8_62466425($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:company_name")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:company_name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&($_smarty_tpl->tpl_vars['object']->value['company_id']||$_smarty_tpl->tpl_vars['object']->value['company_name'])) {?>
    <?php if (!$_smarty_tpl->tpl_vars['object']->value['company_name']) {?>
        <?php $_smarty_tpl->tpl_vars['_company_name'] = new Smarty_variable(fn_get_company_name($_smarty_tpl->tpl_vars['object']->value['company_id']), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_hidden_input']->value) {?>
        <input type="hidden" id="company_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" id="company_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']!==smarty_modifier_enum("UserTypes::VENDOR")) {?>
        <?php if ($_smarty_tpl->tpl_vars['simple']->value) {?>
            <small class="muted"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
        <?php } else { ?>
            <p class="muted"><small><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small></p>
        <?php }?>
    <?php }?>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:company_name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
