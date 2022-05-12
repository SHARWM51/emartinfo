<?php /* Smarty version Smarty-3.1.21, created on 2022-05-11 16:18:08
         compiled from "/home/emartinf/public_html/design/backend/templates/views/auth/login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:659370677627b9468cc2ae2-30940670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09586e4a82bd2da2a551d2358d859dcaeb5f67b0' => 
    array (
      0 => '/home/emartinf/public_html/design/backend/templates/views/auth/login_form.tpl',
      1 => 1650021892,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '659370677627b9468cc2ae2-30940670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stored_user_login' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_627b9468cec697_23445323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_627b9468cec697_23445323')) {function content_627b9468cec697_23445323($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/emartinf/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('administration_panel','email','password','forgot_password_question'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"auth:login_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"auth:login_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="main_login_form" class="signin-modal__form cm-skip-check-items cm-check-changes">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_query_remove(fn_url($_REQUEST['return_url'],"A","rel"),"return_url"), ENT_QUOTES, 'UTF-8');?>
">
        <div class="modal-header">
            <h4 class="signin-modal__form-header"><?php echo $_smarty_tpl->__("administration_panel");?>
</h4>
        </div>
        <div class="modal-body">
            <div class="control-group">
                <label for="username" class="signin-modal__form-label cm-trim cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
:</label>
                <input class="signin-modal__form-field cm-focus" id="username" type="text" name="user_login" size="20" value="<?php if ($_smarty_tpl->tpl_vars['stored_user_login']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['stored_user_login']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');
}?>" tabindex="1">
            </div>
            <div class="control-group">
                <div>
                    <label for="password" class="signin-modal__form-label signin-modal__form-label--password cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
                    <a href="<?php echo htmlspecialchars(fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="pull-right"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
                </div>
                <input class="signin-modal__form-field" type="password" id="password" name="password" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" tabindex="2" maxlength="32">
            </div>
        </div>
        <div class="modal-footer signin-modal__footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/sign_in.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.login]",'but_role'=>"button_main",'tabindex'=>"3"), 0);?>

        </div>
    </form>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"auth:login_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
