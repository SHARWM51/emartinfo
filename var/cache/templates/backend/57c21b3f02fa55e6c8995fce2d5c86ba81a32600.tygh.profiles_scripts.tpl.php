<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:13:47
         compiled from "/home/emartinf/public_html/design/backend/templates/views/profiles/components/profiles_scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:458649968627b93634d3c47-62011787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57c21b3f02fa55e6c8995fce2d5c86ba81a32600' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/profiles/components/profiles_scripts.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '458649968627b93634d3c47-62011787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'states' => 0,
    'states_are_optional' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b93634d97c8_31552480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b93634d97c8_31552480')) {function content_627b93634d97c8_31552480($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {

    /* Do not put this code to document.ready, because it should be
       initialized first
    */
    $.ceRebuildStates('init', {
        default_country: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
        states: <?php echo json_encode($_smarty_tpl->tpl_vars['states']->value);?>
,
        states_are_optional: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['states_are_optional']->value)===null||$tmp==='' ? false : $tmp)), ENT_QUOTES, 'UTF-8');?>

    });


    
    $.ceFormValidator('setZipcode', {
        US: {
            regexp: /^(\d{5})(-\d{4})?$/,
            format: '01342 (01342-5678)'
        },
        CA: {
            regexp: /^(\w{3} ?\w{3})$/,
            format: 'K1A OB1 (K1AOB1)'
        },
        RU: {
            regexp: /^(\d{6})?$/,
            format: '123456'
        }
    });
    

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
