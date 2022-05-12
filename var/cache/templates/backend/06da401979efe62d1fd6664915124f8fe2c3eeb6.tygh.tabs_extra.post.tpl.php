<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:13:17
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:487344083627ba15534e057-45248202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06da401979efe62d1fd6664915124f8fe2c3eeb6' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '487344083627ba15534e057-45248202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba1553581a4_77039095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba1553581a4_77039095')) {function content_627ba1553581a4_77039095($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
