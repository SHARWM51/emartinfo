<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:29
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:814625404627ba73d2fb025-66182821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4908813f61f6a92bf39d0d67373d7fd37ba3c09' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '814625404627ba73d2fb025-66182821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'tab_content_capture' => 0,
    'tab' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73d314567_12390532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73d314567_12390532')) {function content_627ba73d314567_12390532($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__smc.more','ab__smc.less','ab__smc.more','ab__smc.less'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"tabs:ab__product_tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if (strlen(trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value]))) {?><div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" data-ab-smc-tab-hide="<?php echo htmlspecialchars(implode('|',$_smarty_tpl->tpl_vars['tab']->value['ab__smc_hide_content']), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-more="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['tab']->value['ab__smc_show_more'])===null||$tmp==='' ? $_smarty_tpl->__("ab__smc.more") : $tmp), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-less="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['tab']->value['ab__smc_show_less'])===null||$tmp==='' ? $_smarty_tpl->__("ab__smc.less") : $tmp), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['ab__smc_height'], ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-tab-override-h="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['ab__smc_override'], ENT_QUOTES, 'UTF-8');?>
"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value];?>
</div><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__hide_product_description/hooks/tabs/ab__product_tabs_content.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"tabs:ab__product_tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if (strlen(trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value]))) {?><div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content content-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
" data-ab-smc-tab-hide="<?php echo htmlspecialchars(implode('|',$_smarty_tpl->tpl_vars['tab']->value['ab__smc_hide_content']), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-more="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['tab']->value['ab__smc_show_more'])===null||$tmp==='' ? $_smarty_tpl->__("ab__smc.more") : $tmp), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-less="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['tab']->value['ab__smc_show_less'])===null||$tmp==='' ? $_smarty_tpl->__("ab__smc.less") : $tmp), ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['ab__smc_height'], ENT_QUOTES, 'UTF-8');?>
"data-ab-smc-tab-override-h="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['ab__smc_override'], ENT_QUOTES, 'UTF-8');?>
"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['tab_content_capture']->value];?>
</div><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"tabs:ab__product_tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
