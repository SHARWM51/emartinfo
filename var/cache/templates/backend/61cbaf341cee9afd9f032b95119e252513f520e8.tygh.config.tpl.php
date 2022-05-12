<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 18:23:22
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/vendor_panel_configurator/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:305169867627bb1c2e95464-01398454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61cbaf341cee9afd9f032b95119e252513f520e8' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/vendor_panel_configurator/config.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '305169867627bb1c2e95464-01398454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627bb1c2ee1ac7_83381823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627bb1c2ee1ac7_83381823')) {function content_627bb1c2ee1ac7_83381823($_smarty_tpl) {?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="vendor") {?>
    <?php $_smarty_tpl->tpl_vars['navigation_accordion'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["navigation_accordion"])===null||$tmp==='' ? true : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['navigation_accordion'] = clone $_smarty_tpl->tpl_vars['navigation_accordion'];?>
    <?php $_smarty_tpl->tpl_vars['select_languages'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["select_languages"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_languages'] = clone $_smarty_tpl->tpl_vars['select_languages'];?>
    <?php $_smarty_tpl->tpl_vars['enable_onclick_menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["enable_onclick_menu"])===null||$tmp==='' ? true : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['enable_onclick_menu'] = clone $_smarty_tpl->tpl_vars['enable_onclick_menu'];?>
    <?php $_smarty_tpl->tpl_vars['enable_sticky_scroll'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["enable_sticky_scroll"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['enable_sticky_scroll'] = clone $_smarty_tpl->tpl_vars['enable_sticky_scroll'];?>
    <?php $_smarty_tpl->tpl_vars['enable_search_collapse'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["enable_search_collapse"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['enable_search_collapse'] = clone $_smarty_tpl->tpl_vars['enable_search_collapse'];?>

    <?php $_smarty_tpl->tpl_vars['show_company'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_company"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_company'] = clone $_smarty_tpl->tpl_vars['show_company'];?>
    <?php $_smarty_tpl->tpl_vars['show_menu_descriptions'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_menu_descriptions"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_menu_descriptions'] = clone $_smarty_tpl->tpl_vars['show_menu_descriptions'];?>
    <?php $_smarty_tpl->tpl_vars['show_menu_caret'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_menu_caret"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_menu_caret'] = clone $_smarty_tpl->tpl_vars['show_menu_caret'];?>
    <?php $_smarty_tpl->tpl_vars['show_addon_icon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_addon_icon"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_addon_icon'] = clone $_smarty_tpl->tpl_vars['show_addon_icon'];?>
    <?php $_smarty_tpl->tpl_vars['show_languages_in_header_menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_languages_in_header_menu"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_languages_in_header_menu'] = clone $_smarty_tpl->tpl_vars['show_languages_in_header_menu'];?>
    <?php $_smarty_tpl->tpl_vars['show_currencies_in_header_menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_currencies_in_header_menu"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_currencies_in_header_menu'] = clone $_smarty_tpl->tpl_vars['show_currencies_in_header_menu'];?>
    <?php $_smarty_tpl->tpl_vars['show_last_viewed_items'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_last_viewed_items"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_last_viewed_items'] = clone $_smarty_tpl->tpl_vars['show_last_viewed_items'];?>
    <?php $_smarty_tpl->tpl_vars['show_pagination_open'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_pagination_open"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_pagination_open'] = clone $_smarty_tpl->tpl_vars['show_pagination_open'];?>
    <?php $_smarty_tpl->tpl_vars['show_list_price_column'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_list_price_column"])===null||$tmp==='' ? false : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_list_price_column'] = clone $_smarty_tpl->tpl_vars['show_list_price_column'];?>

    <?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["image_width"])===null||$tmp==='' ? "80" : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_width'] = clone $_smarty_tpl->tpl_vars['image_width'];?>
    <?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["image_height"])===null||$tmp==='' ? "80" : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_height'] = clone $_smarty_tpl->tpl_vars['image_height'];?>

    <?php $_smarty_tpl->tpl_vars['is_open_state_sidebar_save'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["is_open_state_sidebar_save"])===null||$tmp==='' ? true : $tmp), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['is_open_state_sidebar_save'] = clone $_smarty_tpl->tpl_vars['is_open_state_sidebar_save'];?>

    
    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['element_color']) {?>
        <?php $_smarty_tpl->tpl_vars['mainColor'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['element_color'], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['mainColor'] = clone $_smarty_tpl->tpl_vars['mainColor'];?>
    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["main_color"]) {?>
        <?php $_smarty_tpl->tpl_vars['mainColor'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["main_color"], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['mainColor'] = clone $_smarty_tpl->tpl_vars['mainColor'];?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['mainColor'] = new Smarty_variable("#024567", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['mainColor'] = clone $_smarty_tpl->tpl_vars['mainColor'];?> 
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['sidebar_color']) {?>
        <?php $_smarty_tpl->tpl_vars['menuSidebarColor'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['sidebar_color'], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['menuSidebarColor'] = clone $_smarty_tpl->tpl_vars['menuSidebarColor'];?>
    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["menu_sidebar_color"]) {?>
        <?php $_smarty_tpl->tpl_vars['menuSidebarColor'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["menu_sidebar_color"], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['menuSidebarColor'] = clone $_smarty_tpl->tpl_vars['menuSidebarColor'];?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['menuSidebarColor'] = new Smarty_variable("#eef1f3", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['menuSidebarColor'] = clone $_smarty_tpl->tpl_vars['menuSidebarColor'];?>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['main_pair']['icon']['image_path']) {?>
        <?php $_smarty_tpl->tpl_vars['menuSidebarBg'] = new Smarty_variable("url(".((string)$_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['main_pair']['icon']['image_path']).")", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['menuSidebarBg'] = clone $_smarty_tpl->tpl_vars['menuSidebarBg'];?>
    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["menu_sidebar_bg"]) {?>
        <?php $_smarty_tpl->tpl_vars['menuSidebarBg'] = new Smarty_variable("url(".((string)$_smarty_tpl->tpl_vars['config']->value['vendor_panel_style']['menu_sidebar_bg']).")", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['menuSidebarBg'] = clone $_smarty_tpl->tpl_vars['menuSidebarBg'];?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['menuSidebarBg'] = new Smarty_variable("none", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['menuSidebarBg'] = clone $_smarty_tpl->tpl_vars['menuSidebarBg'];?>
    <?php }?>
<?php }?>
<?php }} ?>
