<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 12:18:07
         compiled from "/home/emartinf/public_html/design/backend/templates/views/tools/components/changes_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:657011522627cada7de8af4-82616812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34c9f84e29e88d2747343f02dd7ef6eb230fa805' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/tools/components/changes_tree.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '657011522627cada7de8af4-82616812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_id' => 0,
    'changes_tree' => 0,
    'item' => 0,
    'direction' => 0,
    'shift' => 0,
    'show_all' => 0,
    'item_id' => 0,
    'expand_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627cada7e24bc2_31894961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627cada7e24bc2_31894961')) {function content_627cada7e24bc2_31894961($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/emartinf/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items'));
?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
<div class="hidden" id="changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['changes_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<div class="table-wrapper">
    <table width="100%" class="table table-tree table-middle table--relative">
    <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['level']%2) {?>class="multiple-table-row"<?php }?>>
        <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['level'])===null||$tmp==='' ? "0" : $tmp),'assign'=>"shift"),$_smarty_tpl);?>

        <td<?php if ($_smarty_tpl->tpl_vars['item']->value['action']) {?> class="snapshot-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['action'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <span style="padding-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {
if ($_smarty_tpl->tpl_vars['show_all']->value) {?><span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination <?php if ($_smarty_tpl->tpl_vars['expand_all']->value&&$_smarty_tpl->tpl_vars['item']->value['action']!="added") {?>hidden<?php }?>"><span class="icon-caret-right"></span></span><?php } else { ?><span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination"><span class="icon-caret-right"></span></span><?php }?><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value||!$_smarty_tpl->tpl_vars['show_all']->value||$_smarty_tpl->tpl_vars['item']->value['action']=="added") {?> hidden<?php }?>"><span class="icon-caret-down"></span></span><?php } else { ?>&nbsp;<?php }?><span <?php if (!$_smarty_tpl->tpl_vars['item']->value['content']) {?> style="padding-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: 14px;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
        </td>
    </tr>
    </table>
</div>
<?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {?>
    <div<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value||$_smarty_tpl->tpl_vars['item']->value['action']=="added") {?> class="hidden"<?php }?> id="changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/tools/components/changes_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('changes_tree'=>$_smarty_tpl->tpl_vars['item']->value['content'],'parent_id'=>false,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0);?>

    <?php }?>
    <!--changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?><!--changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }?>
<?php }} ?>
