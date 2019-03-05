<?php
/* Smarty version 3.1.33, created on 2019-03-04 08:45:07
  from 'C:\xampp\htdocs\smarty\訂購系統\templates\buy_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cd78314f1e8_98084323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '040cb822d1dd2a530e9d55f67f5ae8092364a80d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\訂購系統\\templates\\buy_cart.tpl',
      1 => 1551685262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cd78314f1e8_98084323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<html>
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
        <?php if ($_smarty_tpl->tpl_vars['out_range']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "購買失敗", text: "商品 :<?php ob_start();
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['name']->value,13);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 的庫存不足", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
		<?php return;?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php echo '<script'; ?>
> swal({ title: "購買成功", text: "感謝您的支持", icon: "success", buttons: false}); <?php echo '</script'; ?>
>
        <meta http-equiv=REFRESH CONTENT=1;url=<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['cart'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
>
	<?php } else { ?>
        <?php echo '<script'; ?>
> swal({ title: "購買失敗", text: "請稍後再試", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
        <?php return;?>
	<?php }?>

</body>
</html><?php }
}
