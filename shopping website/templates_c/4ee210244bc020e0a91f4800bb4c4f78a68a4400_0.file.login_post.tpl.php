<?php
/* Smarty version 3.1.33, created on 2019-02-26 10:42:26
  from 'C:\xampp\htdocs\smarty\訂購系統\templates\login_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c750a02f1ba73_64249956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ee210244bc020e0a91f4800bb4c4f78a68a4400' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\訂購系統\\templates\\login_post.tpl',
      1 => 1551174133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c750a02f1ba73_64249956 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title_window']->value;?>
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

        <?php if (!$_smarty_tpl->tpl_vars['verification']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "登入失敗", text: "驗證碼輸入錯誤", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php }?>

        <?php if ($_smarty_tpl->tpl_vars['locked']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "登入失敗", text: "此帳號已被鎖定", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "登入成功", text: "畫面將自動跳回主選單", icon: "success", buttons: false}); <?php echo '</script'; ?>
>
        <meta http-equiv=REFRESH CONTENT=1;url=<?php echo $_smarty_tpl->tpl_vars['script']->value['home'];?>
>
	<?php } else { ?>
        <?php echo '<script'; ?>
> swal({ title: "登入失敗", text: "帳號密碼有誤", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
        <?php return;?>
	<?php }?>

</body>
</html><?php }
}
