<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 07:05:14
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_locations/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1543615965627c6452bc66f1-98136776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02f71dc29527b06ff018ad910a3df93c430d06f5' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_locations/hooks/index/scripts.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1543615965627c6452bc66f1-98136776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c6452bcf758_25575938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c6452bcf758_25575938')) {function content_627c6452bcf758_25575938($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function (_, $) {
        _.vendor_locations = {
            api_key: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['api_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
'
        };
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geocomplete.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geolocate.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geomap.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/func.js"),$_smarty_tpl);?>

<?php }} ?>
