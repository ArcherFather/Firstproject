<?php
/* Smarty version 3.1.33, created on 2019-02-27 07:14:00
  from 'C:\xampp\htdocs\smarty\訂購系統\templates\add_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c762aa82eb771_28213729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ce677e4184c4329db43c05b461ecf1fdb3b415f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\訂購系統\\templates\\add_cart.tpl',
      1 => 1551248039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c762aa82eb771_28213729 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
</head><!--/head-->
<body>
                <?php if (isset($_smarty_tpl->tpl_vars['permission_user']->value)) {?>

                        <?php if ($_smarty_tpl->tpl_vars['out_range']->value) {?>
                <?php echo '<script'; ?>
> swal({ title: "加入失敗", text: "購買數量不在庫存範圍", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
                <?php return;?>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['full_cart']->value) {?>
                <?php echo '<script'; ?>
> swal({ title: "加入失敗", text: "購物車已滿 (最多存放五樣商品)", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
                <?php return;?>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
                <?php echo '<script'; ?>
> swal({ title: "成功加入購物車", icon: "success", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
            <?php } else { ?>
                <?php echo '<script'; ?>
> swal({ title: "加入失敗", icon: "error", button: "確定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
            <?php }?>
        <?php } else { ?>              <?php echo '<script'; ?>
> swal({ title: "請先進行登入", icon: "warning", button: "確定 " }).then(function() { window.location = '<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['login'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
'; }); <?php echo '</script'; ?>
>
        <?php }?>

</body>
</html><?php }
}
