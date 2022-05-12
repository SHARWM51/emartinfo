<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:09:43
         compiled from "/home/emartinf/public_html/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145020861627b926f492253-74418242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97933dc6cfd25028095957128107860e9d3543f' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '145020861627b926f492253-74418242',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b926f4950f1_08757356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b926f4950f1_08757356')) {function content_627b926f4950f1_08757356($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/home/emartinf/public_html/app/functions/smarty_plugins/function.include_ext.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign help-center__show-help-center--icon"),$_smarty_tpl);?>

        </a>
    </div>
<?php }?>
<?php }} ?>
