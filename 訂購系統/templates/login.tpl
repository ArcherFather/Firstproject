<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$title_window}}</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
        {* 上方列 : 灰色bar *}
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
		
        {* 上方列 : 帳號資訊 / 購物車 / 登入登出 *}
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
								<li><a href='{{$script.login}}'><i class="fa fa-lock"></i> 登入</a></li>
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
								<li><a href="{{$script.home}}">Home</a></li>
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
					{* 登入系統 *}
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="{{$script.lp}}" method="post">
							<input type="varchar" name="account" placeholder="Account" maxlength="25"/>
							<input type="password" name="password" placeholder="Password" maxlength="20"/>
							<!-- 重新產生驗證碼 -->
							<script>
							function refresh_code(){ 
								document.getElementById("imgcode").src="{{$script.captcha}}"; 
							} 
							</script>
							<!-- 輸入框 -->
							<input type="text" name="checkword" maxlength="4" autocomplete="off" placeholder="Verify Code"/>
							<!-- 驗證碼 -->
							<p><img id="imgcode" src="{{$script.captcha}}" onclick="refresh_code()" /><br />
							(Push the image and change the verify code)</p>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					{* 註冊系統 *}
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{$script.rp}}" method="post">
							<input type="varchar" name="account" placeholder="Account" maxlength="25"/>
							<input type="password" name="password" placeholder="Password" maxlength="20"/>
							<input type="varchar" name="name" placeholder="Name" maxlength="20"/>
							<input type="varchar" name="phone" placeholder="Phone" maxlength="11"/>
							<input type="email" name="email" placeholder="Email Address" maxlength="50"/>
							<!-- 重新產生驗證碼 -->
							<script>
							function refresh_code_r(){ 
								document.getElementById("imgcode_r").src="{{$script.captcha_r}}"; 
							} 
							</script>
							<!-- 輸入框 -->
							<input type="text" name="checkword_r" maxlength="4" autocomplete="off" placeholder="Verify Code"/>
							<!-- 驗證碼 -->
							<p><img id="imgcode_r" src="{{$script.captcha_r}}" onclick="refresh_code_r()" /><br />
							(Push the image and change the verify code)</p>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>