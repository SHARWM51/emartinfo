<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:00:53
         compiled from "/home/emartinf/public_html/design/backend/templates/views/storefronts/components/is_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1600164795627bac7d4d6fd2-74508687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbfb29b76bd111749c292652ceb70b0669b8711b' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/storefronts/components/is_default.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1600164795627bac7d4d6fd2-74508687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'is_default' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bac7d4db045_73022667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bac7d4db045_73022667')) {function content_627bac7d4db045_73022667($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('is_default_storefront'));
?>

<div class="control-group">
    <label for="is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("is_default_storefront");?>

    </label>
    <div class="controls" id="is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <input type="checkbox"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['is_default']->value) {?>checked<?php }?>
        />
    </div>
</div>
<?php }} ?>
