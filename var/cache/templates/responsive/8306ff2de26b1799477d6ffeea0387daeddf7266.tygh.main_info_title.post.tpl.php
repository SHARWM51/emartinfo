<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 17:38:29
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__deal_of_the_day/hooks/products/main_info_title.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44234450627ba73d095928-30860606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8306ff2de26b1799477d6ffeea0387daeddf7266' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__deal_of_the_day/hooks/products/main_info_title.post.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '44234450627ba73d095928-30860606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'promotions_ids' => 0,
    'promotion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627ba73d0b8915_98584757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627ba73d0b8915_98584757')) {function content_627ba73d0b8915_98584757($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->tpl_vars['promotions_ids'] = new Smarty_variable(fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array("exclude_hidden"=>true)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['promotion'] = new Smarty_variable(fn_ab__dotd_get_cached_promotion_data($_smarty_tpl->tpl_vars['promotions_ids']->value[0]), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
    <div class="ab__deal_of_the_day">
		<div<?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?> class="col1"<?php }?>>
	        <div class="action-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
            <div class="actions-link">
		        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['promotions_ids']->value)>1) {?>
                    <span>
                        <i class="cm-tooltip ty-icon-help-circle" title="<?php echo $_smarty_tpl->__('ab__dotd.all_promotions.title');?>
"></i>
                        <a class="also-in-promos-link cm-external-click" data-ca-scroll="content_ab__deal_of_the_day" data-ca-external-click-id="ab__deal_of_the_day"><?php echo $_smarty_tpl->__('ab__dotd.all_promotions');?>
</a>
                    </span>
		        <?php }?>
                <span>
                    <?php if (fn_string_not_empty(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['promotion']->value['short_description']))) {?><i class="cm-tooltip ty-icon-help-circle" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['short_description'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                    <a class="details-promo-link" href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" title="" target="_blank"><?php echo $_smarty_tpl->__('ab__dotd.detailed');?>
</a>
                </span>
            </div>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_counter_on_product_page']==="Y"&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?>
        <div class="col2">
            <span class="time-left"><?php echo $_smarty_tpl->__('ab__dotd_time_left');?>
:</span>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <?php }?>
    </div>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/products/main_info_title.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/products/main_info_title.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->tpl_vars['promotions_ids'] = new Smarty_variable(fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array("exclude_hidden"=>true)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['promotion'] = new Smarty_variable(fn_ab__dotd_get_cached_promotion_data($_smarty_tpl->tpl_vars['promotions_ids']->value[0]), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['promotion']->value) {?>
    <div class="ab__deal_of_the_day">
		<div<?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?> class="col1"<?php }?>>
	        <div class="action-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
            <div class="actions-link">
		        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['promotions_ids']->value)>1) {?>
                    <span>
                        <i class="cm-tooltip ty-icon-help-circle" title="<?php echo $_smarty_tpl->__('ab__dotd.all_promotions.title');?>
"></i>
                        <a class="also-in-promos-link cm-external-click" data-ca-scroll="content_ab__deal_of_the_day" data-ca-external-click-id="ab__deal_of_the_day"><?php echo $_smarty_tpl->__('ab__dotd.all_promotions');?>
</a>
                    </span>
		        <?php }?>
                <span>
                    <?php if (fn_string_not_empty(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['promotion']->value['short_description']))) {?><i class="cm-tooltip ty-icon-help-circle" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['short_description'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                    <a class="details-promo-link" href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" title="" target="_blank"><?php echo $_smarty_tpl->__('ab__dotd.detailed');?>
</a>
                </span>
            </div>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['show_counter_on_product_page']==="Y"&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']>time()) {?>
        <div class="col2">
            <span class="time-left"><?php echo $_smarty_tpl->__('ab__dotd_time_left');?>
:</span>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__deal_of_the_day/components/init_countdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <?php }?>
    </div>
    <?php }?>
<?php }
}?><?php }} ?>
