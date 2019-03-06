<?php
/* Smarty version 3.1.33, created on 2019-02-25 07:54:20
  from 'C:\xampp\htdocs\smarty\templates\reply_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73911c2dd4d0_31889897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd5a5f31520650ad74291874fcf270bd5d46b20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\reply_post.tpl',
      1 => 1551077658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73911c2dd4d0_31889897 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php if (!isset($_smarty_tpl->tpl_vars['content']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "回覆失敗", text: "內容不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['verification']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "回覆失敗", text: "驗證碼輸入錯誤!", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php }?>

        <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "回覆成功", icon: "success", button: "確定 " }).then(function() { history.go(-2); }); <?php echo '</script'; ?>
>
    <?php } else { ?>
        <?php echo '<script'; ?>
> swal({ title: "回覆失敗", icon: "error", button: "確定 " }).then(function() { history.go(-2); }); <?php echo '</script'; ?>
>
    <?php }?>
</body>
</html><?php }
}
