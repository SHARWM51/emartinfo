<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:48
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1658993504627b9274b62550-06128200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26ba1a2478d54880e5017598c7d421664d08ad07' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1652253997,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1658993504627b9274b62550-06128200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location_data' => 0,
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9274b67ed5_68457426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9274b67ed5_68457426')) {function content_627b9274b67ed5_68457426($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_manager:frontend_container")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_manager:frontend_container"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_manager:frontend_container"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
