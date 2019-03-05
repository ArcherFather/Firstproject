<?php
/* Smarty version 3.1.33, created on 2019-02-25 10:18:03
  from 'C:\xampp\htdocs\smarty\templates\leave_message_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73b2cb81d2c6_44311334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daeb742cd3f622559e6fdb1b4584a27282591cbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\leave_message_post.tpl',
      1 => 1551086280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73b2cb81d2c6_44311334 (Smarty_Internal_Template $_smarty_tpl) {
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
    table{
        border-spacing:0;           font-weight:bold;
        table-layout:fixed;         }
</style>
<body>
        <?php if (!isset($_smarty_tpl->tpl_vars['nname']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "留言失敗", text: "暱稱不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php } elseif (!isset($_smarty_tpl->tpl_vars['phone']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "留言失敗", text: "電話號碼不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php } elseif (!isset($_smarty_tpl->tpl_vars['email']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "留言失敗", text: "Email不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php } elseif (!isset($_smarty_tpl->tpl_vars['title']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "留言失敗", text: "主題不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php } elseif (!isset($_smarty_tpl->tpl_vars['content']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "留言失敗", text: "內容不得空白，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
    <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['emai_format']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "留言失敗", text: "Email格式錯誤，請重新輸入！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['verification']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "留言失敗", text: "驗證碼輸入錯誤！", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php }?>

        <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "留言成功", icon: "success", button: "確定 " }).then(function() { window.location = '<?php echo $_smarty_tpl->tpl_vars['script']->value['board'];?>
'; }); <?php echo '</script'; ?>
>
    <?php } else { ?>
        <?php echo '<script'; ?>
> swal({ title: "留言失敗", icon: "error", button: "確定 " }).then(function() { window.location = '<?php echo $_smarty_tpl->tpl_vars['script']->value['board'];?>
'; }); <?php echo '</script'; ?>
>
    <?php }?>
</body>
</html><?php }
}
