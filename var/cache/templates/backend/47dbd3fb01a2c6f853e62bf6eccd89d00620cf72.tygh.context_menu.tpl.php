<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:13:42
         compiled from "/home/emartinf/public_html/design/backend/templates/components/context_menu/context_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1916011208627b935e991e22-96089035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47dbd3fb01a2c6f853e62bf6eccd89d00620cf72' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/components/context_menu/context_menu.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1916011208627b935e991e22-96089035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'context_menu_items' => 0,
    'status_selector' => 0,
    'context_menu_id' => 0,
    'item' => 0,
    'item_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b935e998af5_09508880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b935e998af5_09508880')) {function content_627b935e998af5_09508880($_smarty_tpl) {?>

<div class="bulk-edit clearfix hidden <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['class'], ENT_QUOTES, 'UTF-8');?>
"
     <?php if ($_smarty_tpl->tpl_vars['context_menu_items']->value) {?>
         data-ca-bulkedit-expanded-object="true"
         data-ca-bulkedit-component="expandedObject"
     <?php } else { ?>
         data-ca-bulkedit-disabled="true"
     <?php }?>
>

    <ul class="btn-group bulk-edit__wrapper">
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['status_selector']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('statuses'=>$_smarty_tpl->tpl_vars['status_selector']->value->getStatuses(),'elms_container'=>$_smarty_tpl->tpl_vars['context_menu_id']->value), 0);?>


        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['context_menu_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['item']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item'=>$_smarty_tpl->tpl_vars['item']->value,'data'=>$_smarty_tpl->tpl_vars['item']->value->getData()), 0);?>

        <?php } ?>
    </ul>

</div>
<?php }} ?>
