<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:13:42
         compiled from "/home/emartinf/public_html/design/backend/templates/common/table_col_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1310457360627b935e9333e7-31643921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f5b0cb807bd804ed48667e6aa1b447856497bd2' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/common/table_col_head.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1310457360627b935e9333e7-31643921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'config' => 0,
    'rev' => 0,
    'type' => 0,
    'search' => 0,
    'class' => 0,
    'title' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b935e943083_58496594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b935e943083_58496594')) {function content_627b935e943083_58496594($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['c_url']->value ? $_smarty_tpl->tpl_vars['c_url']->value : fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);
$_smarty_tpl->tpl_vars['rev'] = new Smarty_variable($_smarty_tpl->tpl_vars['rev']->value ? $_smarty_tpl->tpl_vars['rev']->value : (($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['type']->value) {?><a class="cm-ajax th-text-overflow <?php if ($_smarty_tpl->tpl_vars['type']->value===$_smarty_tpl->tpl_vars['search']->value['sort_by']) {?>th-text-overflow--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['type']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['rev']->value) {
echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
 data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
 title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo (($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['type']->value) : $tmp);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['text']->value) {?><span class="th-text-overflow"<?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo htmlspecialchars('', ENT_QUOTES, 'UTF-8');?>
 title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</span><?php }?><?php }} ?>
