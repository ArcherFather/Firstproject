<?php
/* Smarty version 3.1.33, created on 2019-02-26 02:41:22
  from 'C:\xampp\htdocs\smarty\templates\register_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c749942d24de5_68013033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6dabf06e2180cc4fbaa29902c6201cff81b6372' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\register_post.tpl',
      1 => 1551145242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c749942d24de5_68013033 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<style>
    body{
        background: url(https://i2.bahamut.com.tw/html_bg.gif) center top #F9F9F9;
        background-image: url(https://i2.bahamut.com.tw/html_bg.gif);
        background-position-x: center;
        background-position-y: top;
        background-size: initial;
        background-repeat-x: initial;
        background-repeat-y: initial;
        background-attachment: initial;
        background-origin: initial;
        background-clip: initial;
        background-color: rgb(249, 249, 249);
        font-family: 微軟正黑體;
    }
</style>
<body>
        <?php if (!isset($_smarty_tpl->tpl_vars['id']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "帳號名稱不得空白，請重新輸入!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php } elseif (!isset($_smarty_tpl->tpl_vars['pd']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "密碼不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php } elseif (!isset($_smarty_tpl->tpl_vars['name']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "姓名不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php } elseif (!isset($_smarty_tpl->tpl_vars['nname']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "暱稱不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php } elseif (!isset($_smarty_tpl->tpl_vars['gender']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "請選擇性別！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php } elseif (!isset($_smarty_tpl->tpl_vars['phone']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "電話號碼不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php } elseif (!isset($_smarty_tpl->tpl_vars['email']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "Email不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php }?>
     
        <?php if (!$_smarty_tpl->tpl_vars['id_unique']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "此帳號名稱已存在，請更換！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['id_format']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "帳號格式錯誤，只能使用英文字母或數字!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['pd_format']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "密碼格式錯誤，須為同時包含數字與字母，且長度為6~20的字串!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['emai_format']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "Email格式錯誤，請重新輸入!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['verification']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊失敗", text: "驗證碼輸入錯誤!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "註冊成功", icon: "success", button: "返回主畫面 " }).then(function() { window.location = '<?php echo $_smarty_tpl->tpl_vars['script']->value['menu'];?>
'; }); <?php echo '</script'; ?>
>
	<?php } else { ?>
		<?php echo '<script'; ?>
> swal({ title: "註冊失敗", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
	<?php }?>

</body>
</html><?php }
}
