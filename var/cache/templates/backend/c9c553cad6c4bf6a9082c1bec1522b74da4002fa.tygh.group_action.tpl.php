<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:13:42
         compiled from "/home/emartinf/public_html/design/backend/templates/components/context_menu/items/group_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:664203481627b935e9abad4-40624900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c553cad6c4bf6a9082c1bec1522b74da4002fa' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/components/context_menu/items/group_action.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '664203481627b935e9abad4-40624900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b935e9b5282_53919763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b935e9b5282_53919763')) {function content_627b935e9b5282_53919763($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.render_tag_attrs.php';
?>

<li <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']['class']) {?>
        class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['menu_item_class'], ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <a <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['action_attributes']);?>

            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']['class']) {?>
                class="cm-process-items cm-submit <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['action_class'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']["data-ca-target-form"]) {?>
                data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']["data-ca-dispatch"]) {?>
                data-ca-dispatch="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
]"
            <?php }?>
    >
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>

    </a>
</li>
<?php }} ?>
