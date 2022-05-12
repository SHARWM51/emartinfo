<?php /* Smarty version Smarty-3.1.21, created on 2022-05-12 08:12:19
         compiled from "/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__deal_of_the_day/overrides/views/promotions/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:664945385627c740b14d361-82153002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d7d2386c45525854b531c0e9b01e55a4bc3832b' => 
    array (
      0 => '/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__deal_of_the_day/overrides/views/promotions/list.tpl',
      1 => 1652265539,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '664945385627c740b14d361-82153002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'promotions' => 0,
    'promotion' => 0,
    'image_height' => 0,
    'image_width' => 0,
    'days_left' => 0,
    'addons' => 0,
    'settings' => 0,
    'show_chains' => 0,
    'chains' => 0,
    'chains_search' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627c740b1bb307_02599108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627c740b1bb307_02599108')) {function content_627c740b1bb307_02599108($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/emartinf/public_html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_no_active_promotions','promotions','text_no_active_promotions','promotions'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable("200", null, 0);?>
<?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable("330", null, 0);?>

<div class="ab__dotd_promotions clearfix">
    <?php  $_smarty_tpl->tpl_vars['promotion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promotion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promotion']->key => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['promotion_id']) {?>
            <div class="ab__dotd_promotions-item <?php if (!$_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_active']) {?>ab__dotd_promotion_expired<?php }?>">
                <div class="ab__dotd_promotions-item_image" style="max-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_height']->value, ENT_QUOTES, 'UTF-8');?>
px;">
                    <a href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['promotion']->value['image'],'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'no_ids'=>true), 0);?>

                    </a>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_active']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                    <?php $_smarty_tpl->tpl_vars["days_left"] = new Smarty_variable(ceil((($_smarty_tpl->tpl_vars['promotion']->value['to_date']-time())/86400)), null, 0);?>
                    <div class="ab__dotd_promotions-item_days_left<?php if ($_smarty_tpl->tpl_vars['days_left']->value<=$_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['highlight_when_left']) {?> ab__dotd_highlight<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['days_left']->value>1) {?>
                            <?php echo $_smarty_tpl->__('ab__dotd.days_left',array($_smarty_tpl->tpl_vars['days_left']->value));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__('ab__dotd.today_only');?>

                        <?php }?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited']) {?>
                    <?php $_smarty_tpl->tpl_vars["days_left"] = new Smarty_variable(floor((1-(time()-$_smarty_tpl->tpl_vars['promotion']->value['from_date'])/86400)), null, 0);?>
                    <div class="ab__dotd_promotions-item_days_left">
                        <?php echo $_smarty_tpl->__('ab__dotd.days_to_start',array($_smarty_tpl->tpl_vars['days_left']->value));?>

                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_expired']) {?>
                    <div class="ab__dotd_promotions-item_days_left">
                        <?php echo $_smarty_tpl->__('ab__dotd.promotion_expired');?>

                    </div>
                <?php }?>
                
                <div class="ab__dotd_promotions-item_title">
                    <a href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" title=""><?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
</a>
                    <div class="ab__dotd_promotions-item_date">
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                            <?php echo $_smarty_tpl->__('ab__dotd.from');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['from_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                            <?php echo $_smarty_tpl->__('ab__dotd.to');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </div>
                </div>
            </div>
        <?php }?>
        <?php }
if (!$_smarty_tpl->tpl_vars['promotion']->_loop) {
?>
        <p><?php echo $_smarty_tpl->__("text_no_active_promotions");?>
</p>
    <?php } ?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['show_chains']->value&&$_smarty_tpl->tpl_vars['chains']->value) {?>
<div class="ab__dotd_chains">
    <div class="ab__dotd_chains_title"><?php echo $_smarty_tpl->__('ab__dotd.chains_list.title');?>
</div>
    <div class="ab__dotd_chains_content">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/buy_together/blocks/product_tabs/buy_together.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('chains'=>$_smarty_tpl->tpl_vars['chains']->value), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['chains_search']->value['total_pages']>1) {?>
            <button class="ty-btn ty-btn__tertiary ab__dotd_chains-show_more">
                <?php echo $_smarty_tpl->__('ab__dotd.get_more_combinations',array($_smarty_tpl->tpl_vars['chains_search']->value['more']));?>

                <em><?php echo $_smarty_tpl->__('ab__dotd.showed_combinations',array('[n]'=>$_smarty_tpl->tpl_vars['chains_search']->value['items_per_page'],'[total]'=>$_smarty_tpl->tpl_vars['chains_search']->value['total_items']));?>
</em>
            </button>
        <?php }?>
    </div>
</div>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("promotions");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__deal_of_the_day/overrides/views/promotions/list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/home/emartinf/public_html/design/themes/responsive/templates/addons/ab__deal_of_the_day/overrides/views/promotions/list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable("200", null, 0);?>
<?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable("330", null, 0);?>

<div class="ab__dotd_promotions clearfix">
    <?php  $_smarty_tpl->tpl_vars['promotion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promotion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promotion']->key => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['promotion_id']) {?>
            <div class="ab__dotd_promotions-item <?php if (!$_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_active']) {?>ab__dotd_promotion_expired<?php }?>">
                <div class="ab__dotd_promotions-item_image" style="max-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_height']->value, ENT_QUOTES, 'UTF-8');?>
px;">
                    <a href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['promotion']->value['image'],'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'no_ids'=>true), 0);?>

                    </a>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_active']&&$_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                    <?php $_smarty_tpl->tpl_vars["days_left"] = new Smarty_variable(ceil((($_smarty_tpl->tpl_vars['promotion']->value['to_date']-time())/86400)), null, 0);?>
                    <div class="ab__dotd_promotions-item_days_left<?php if ($_smarty_tpl->tpl_vars['days_left']->value<=$_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['highlight_when_left']) {?> ab__dotd_highlight<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['days_left']->value>1) {?>
                            <?php echo $_smarty_tpl->__('ab__dotd.days_left',array($_smarty_tpl->tpl_vars['days_left']->value));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__('ab__dotd.today_only');?>

                        <?php }?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_awaited']) {?>
                    <?php $_smarty_tpl->tpl_vars["days_left"] = new Smarty_variable(floor((1-(time()-$_smarty_tpl->tpl_vars['promotion']->value['from_date'])/86400)), null, 0);?>
                    <div class="ab__dotd_promotions-item_days_left">
                        <?php echo $_smarty_tpl->__('ab__dotd.days_to_start',array($_smarty_tpl->tpl_vars['days_left']->value));?>

                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['promotion']->value['ab__dotd_expired']) {?>
                    <div class="ab__dotd_promotions-item_days_left">
                        <?php echo $_smarty_tpl->__('ab__dotd.promotion_expired');?>

                    </div>
                <?php }?>
                
                <div class="ab__dotd_promotions-item_title">
                    <a href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" title=""><?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
</a>
                    <div class="ab__dotd_promotions-item_date">
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                            <?php echo $_smarty_tpl->__('ab__dotd.from');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['from_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                            <?php echo $_smarty_tpl->__('ab__dotd.to');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </div>
                </div>
            </div>
        <?php }?>
        <?php }
if (!$_smarty_tpl->tpl_vars['promotion']->_loop) {
?>
        <p><?php echo $_smarty_tpl->__("text_no_active_promotions");?>
</p>
    <?php } ?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['show_chains']->value&&$_smarty_tpl->tpl_vars['chains']->value) {?>
<div class="ab__dotd_chains">
    <div class="ab__dotd_chains_title"><?php echo $_smarty_tpl->__('ab__dotd.chains_list.title');?>
</div>
    <div class="ab__dotd_chains_content">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/buy_together/blocks/product_tabs/buy_together.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('chains'=>$_smarty_tpl->tpl_vars['chains']->value), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['chains_search']->value['total_pages']>1) {?>
            <button class="ty-btn ty-btn__tertiary ab__dotd_chains-show_more">
                <?php echo $_smarty_tpl->__('ab__dotd.get_more_combinations',array($_smarty_tpl->tpl_vars['chains_search']->value['more']));?>

                <em><?php echo $_smarty_tpl->__('ab__dotd.showed_combinations',array('[n]'=>$_smarty_tpl->tpl_vars['chains_search']->value['items_per_page'],'[total]'=>$_smarty_tpl->tpl_vars['chains_search']->value['total_items']));?>
</em>
            </button>
        <?php }?>
    </div>
</div>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("promotions");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
