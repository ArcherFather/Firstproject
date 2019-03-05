<?php
/* Smarty version 3.1.33, created on 2019-03-04 07:33:16
  from 'C:\xampp\htdocs\smarty\訂購系統\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cc6aca94861_46032526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4840f7ea692bc815cfadbbbe5b5314aa7bbd42b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\訂購系統\\templates\\login.tpl',
      1 => 1551673679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cc6aca94861_46032526 (Smarty_Internal_Template $_smarty_tpl) {
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
</head><!--/head-->

<body>
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
								<li><a href='<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['login'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
'><i class="fa fa-lock"></i> 登入</a></li>
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
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
">Home</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
										<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['lp'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" method="post">
							<input type="varchar" name="account" placeholder="Account" maxlength="25"/>
							<input type="password" name="password" placeholder="Password" maxlength="20"/>
							<!-- 重新產生驗證碼 -->
							<?php echo '<script'; ?>
>
							function refresh_code(){ 
								document.getElementById("imgcode").src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['captcha'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
"; 
							} 
							<?php echo '</script'; ?>
>
							<!-- 輸入框 -->
							<input type="text" name="checkword" maxlength="4" autocomplete="off" placeholder="Verify Code"/>
							<!-- 驗證碼 -->
							<p><img id="imgcode" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['captcha'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" onclick="refresh_code()" /><br />
							(Push the image and change the verify code)</p>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
										<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['rp'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" method="post">
							<input type="varchar" name="account" placeholder="Account" maxlength="25"/>
							<input type="password" name="password" placeholder="Password" maxlength="20"/>
							<input type="varchar" name="name" placeholder="Name" maxlength="20"/>
							<input type="varchar" name="phone" placeholder="Phone" maxlength="11"/>
							<input type="email" name="email" placeholder="Email Address" maxlength="50"/>
							<!-- 重新產生驗證碼 -->
							<?php echo '<script'; ?>
>
							function refresh_code_r(){ 
								document.getElementById("imgcode_r").src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['captcha_r'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
"; 
							} 
							<?php echo '</script'; ?>
>
							<!-- 輸入框 -->
							<input type="text" name="checkword_r" maxlength="4" autocomplete="off" placeholder="Verify Code"/>
							<!-- 驗證碼 -->
							<p><img id="imgcode_r" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['captcha_r'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" onclick="refresh_code_r()" /><br />
							(Push the image and change the verify code)</p>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/price-range.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.scrollUp.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.prettyPhoto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
