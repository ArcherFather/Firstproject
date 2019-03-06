<?php
/* Smarty version 3.1.33, created on 2019-03-04 05:28:55
  from 'C:\xampp\htdocs\smarty\訂購系統\templates\account_information.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7ca9871302a9_60942377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43925389bb0366d2c6d8bffe0b0d273e05c93663' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\訂購系統\\templates\\account_information.tpl',
      1 => 1551673698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7ca9871302a9_60942377 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php ob_start();
echo $_smarty_tpl->tpl_vars['title_window']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</title>
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
	<header id="header"><!--header-->
        		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a>歡迎蒞臨 * 好好買購物網</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
        		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<img src="images/home/logo.png" alt="" />
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
                                <?php if (!isset($_smarty_tpl->tpl_vars['permission_user']->value)) {?>
                                    <li><a href='<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['login'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
'><i class="fa fa-lock"></i> 登入/註冊</a></li>
                                <?php } else { ?>
                                <li><a><b><font color='#FE980F' >Welcome! <?php ob_start();
echo $_smarty_tpl->tpl_vars['name_user']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</font></b></a></li>
								<li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['ac_infor'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
"><i class="fa fa-user"></i> 帳號資訊</a></li>
								<li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['cart'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
"><i class="fa fa-shopping-cart"></i> 購物車</a></li>
								<li><a href='<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['logout'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
'><i class="fa fa-lock"></i> 登出</a></li>
                                <?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" class="active">Home</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

		<section id="cart_items">
		<div class="container">
			<div style="position:relative;top:20px;left:40%; font-family: 微軟正黑體;">
								<b><font color=#FE980F size=4>帳 號 資 訊</font></b><br><br>
				<b>帳號 : </b> <?php echo $_smarty_tpl->tpl_vars['account']->value;?>
 <br><br>
				<b>姓名 : </b> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <br><br>
				<b>聯絡電話 : </b> <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 <br><br>
				<b>Email : </b> <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 <br><br>
				<b>級別 : </b> <?php echo $_smarty_tpl->tpl_vars['status']->value;?>
 <br><br>
				<a class="btn btn-default update" onclick="location.href='<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['update'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
'">修改資料</a>
			</div>
		</div>
	</section> <!--/#cart_items-->
	


    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.scrollUp.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.prettyPhoto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>

	<?php } else { ?>  		<?php echo '<script'; ?>
> swal({ title: "請先進行登入", icon: "warning", button: "確定 " }).then(function() { window.location = '<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['login'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
'; }); <?php echo '</script'; ?>
>
	<?php }?>
</body>
</html><?php }
}
