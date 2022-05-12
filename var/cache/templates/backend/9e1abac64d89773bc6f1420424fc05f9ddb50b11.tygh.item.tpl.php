<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/views/companies/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220286760627b926f696387-11264384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e1abac64d89773bc6f1420424fc05f9ddb50b11' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/companies/components/picker/item.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '220286760627b926f696387-11264384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f697d62_51962673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f697d62_51962673')) {function content_627b926f697d62_51962673($_smarty_tpl) {?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
