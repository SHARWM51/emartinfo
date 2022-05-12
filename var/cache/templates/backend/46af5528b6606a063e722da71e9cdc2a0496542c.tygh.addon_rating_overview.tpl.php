<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:39:44
         compiled from "/home/emartinf/public_html/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1098453463627bb5984e55a1-50534779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46af5528b6606a063e722da71e9cdc2a0496542c' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1098453463627bb5984e55a1-50534779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_addon_reviews' => 0,
    'average_rating' => 0,
    'ratings_stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb5984e9608_80527338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb5984e9608_80527338')) {function content_627bb5984e9608_80527338($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['total_addon_reviews']->value) {?>
    <section class="cs-addons-rating-addon-rating-overview well">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_addon_reviews']->value), 0);?>


    </section>
<?php }?>
<?php }} ?>
