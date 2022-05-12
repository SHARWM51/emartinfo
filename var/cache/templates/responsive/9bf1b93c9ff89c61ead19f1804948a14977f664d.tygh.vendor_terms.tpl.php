<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:53:02
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/views/profiles/components/vendor_terms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1845719637627bb8b62a1968-63547672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bf1b93c9ff89c61ead19f1804948a14977f664d' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/views/profiles/components/vendor_terms.tpl',
      1 => 1652253997,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1845719637627bb8b62a1968-63547672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'field' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb8b62db8b4_82114496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb8b62db8b4_82114496')) {function content_627bb8b62db8b4_82114496($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_terms_n_conditions_content','vendor_terms_n_conditions_alert','vendor_terms_n_conditions_content','vendor_terms_n_conditions_alert'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-control-group ty-company__terms">
    <div class="cm-field-container">
        <label for="id_accept_terms_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['field']->value['profile_required']=="Y") {?>cm-check-agreement<?php }?>"><input type="checkbox" id="id_accept_terms_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" value="Y" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
"/><a id="sw_terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></label>

        <div class="hidden" id="terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("vendor_terms_n_conditions_content");?>

        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['profile_required']=="Y") {?>
        <?php echo '<script'; ?>
>
            (function(_, $) {
                $.ceFormValidator('registerValidator', {
                    class_name: 'cm-check-agreement',
                    message: '<?php echo strtr($_smarty_tpl->__("vendor_terms_n_conditions_alert"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    func: function(id) {
                        return $('#' + id).prop('checked');
                    }
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/vendor_terms.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/components/vendor_terms.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-control-group ty-company__terms">
    <div class="cm-field-container">
        <label for="id_accept_terms_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['field']->value['profile_required']=="Y") {?>cm-check-agreement<?php }?>"><input type="checkbox" id="id_accept_terms_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" value="Y" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
"/><a id="sw_terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></label>

        <div class="hidden" id="terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("vendor_terms_n_conditions_content");?>

        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['profile_required']=="Y") {?>
        <?php echo '<script'; ?>
>
            (function(_, $) {
                $.ceFormValidator('registerValidator', {
                    class_name: 'cm-check-agreement',
                    message: '<?php echo strtr($_smarty_tpl->__("vendor_terms_n_conditions_alert"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    func: function(id) {
                        return $('#' + id).prop('checked');
                    }
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>
</div>
<?php }?><?php }} ?>
