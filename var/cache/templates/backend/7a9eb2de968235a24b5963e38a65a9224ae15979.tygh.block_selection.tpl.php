<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:41:35
         compiled from "/home/emartinf/public_html/design/backend/templates/views/block_manager/block_selection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:985730004627ba7f78ae764-57355135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a9eb2de968235a24b5963e38a65a9224ae15979' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/block_manager/block_selection.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '985730004627ba7f78ae764-57355135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grid_id' => 0,
    'extra_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba7f78e3984_40388570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba7f78e3984_40388570')) {function content_627ba7f78e3984_40388570($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('manage_existing_block','use_existing_block','create_new_block'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<div id="block_selection<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="user_existing_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php if ($_REQUEST['manage']&&$_REQUEST['manage']=="Y") {
echo $_smarty_tpl->__("manage_existing_block");
} else {
echo $_smarty_tpl->__("use_existing_block");
}?></a></li>
            <li id="create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("create_new_block");?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content tabs_content_blocks" id="tabs_content_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="content_create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/new_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('manage'=>(($tmp = @$_REQUEST['manage'])===null||$tmp==='' ? '' : $tmp)), 0);?>

        <!--content_create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <div id="content_user_existing_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/existing_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('manage'=>(($tmp = @$_REQUEST['manage'])===null||$tmp==='' ? '' : $tmp)), 0);?>

        <!--content_user_existing_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
<!--block_selection<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
