<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:57
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1363569060627ba759671485-13807192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '530528c7d7c46c3e24708993dca52da11a772eb8' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1363569060627ba759671485-13807192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_managing_blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba759674d70_97070690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba759674d70_97070690')) {function content_627ba759674d70_97070690($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.notes.php';
?><?php if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
