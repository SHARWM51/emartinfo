<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:39:44
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/geo_maps/settings/map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:565218336627bb5984519e3-50730719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7bc46ae2e6392053c3e8c52c613b0de611dd03a' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/geo_maps/settings/map.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '565218336627bb5984519e3-50730719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section' => 0,
    'items' => 0,
    'item' => 0,
    'name' => 0,
    'api_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb59845aa51_80283801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb59845aa51_80283801')) {function content_627bb59845aa51_80283801($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.settings_is_configured_correctly_notice'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/map_on_addon_settings.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['section']->value)."_api_key", null, 0);?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['name']===$_smarty_tpl->tpl_vars['name']->value) {?>
        <?php $_smarty_tpl->tpl_vars['api_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['value'], null, 0);?>
        <?php break 1;?>
    <?php }?>
<?php } ?>

<?php echo $_smarty_tpl->__("geo_maps.settings_is_configured_correctly_notice");?>


<div id="geo-map-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
-container" class="control-group <?php if (!$_smarty_tpl->tpl_vars['api_key']->value) {?>hidden<?php }?>">
    <iframe src="<?php echo htmlspecialchars(fn_url("geo_maps.map?provider=".((string)$_smarty_tpl->tpl_vars['section']->value)."&api_key=".((string)$_smarty_tpl->tpl_vars['api_key']->value)), ENT_QUOTES, 'UTF-8');?>
" scrolling="no" id="geo-map-iframe-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" class="geo-map-iframe"></iframe>
</div>
<?php }} ?>
