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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head><!--/head-->

<body>
	{* 如果使用者為會員，允許使用購物車 *}
    {if isset($permission_user) }
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
                                {if ! isset($permission_user) }
                                    <li><a href='{{$script.login}}'><i class="fa fa-lock"></i> 登入/註冊</a></li>
                                {else}
                                <li><a><b><font color='#FE980F' >Welcome! {{$name_user}}</font></b></a></li>
								<li><a href="{{$script.ac_infor}}"><i class="fa fa-user"></i> 帳號資訊</a></li>
								<li><a href="{{$script.cart}}"><i class="fa fa-shopping-cart"></i> 購物車</a></li>
								<li><a href='{{$script.logout}}'><i class="fa fa-lock"></i> 登出</a></li>
                                {/if}
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
								<li><a href="{{$script.home}}" class="active">Home</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	{* 會員資訊修改區 *}
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form" style="position:relative;top:20px;left:90%; font-family: 微軟正黑體;"><!--login form-->
						<h2><b>修 改 會 員 資 訊</b></h2>
						<form action="{{$script.ac_u_post}}" method="post">
							<b> 帳 號 : </b><input type="varchar" name="account" value='{{$account}}' maxlength="25"/>
							<b> 密 碼 : </b><input type="password" name="password"  maxlength="20"/>
							<b> 姓 名 : </b><input type="varchar" name="name" value='{{$name}}' maxlength="20"/>
							<b> 聯 絡 電 話 : </b><input type="varchar" name="phone" value='{{$phone}}' maxlength="11"/>
							<b> Email : </b><input type="varchar" name="email" value='{{$email}}' maxlength="50"/>

							<!-- 重新產生驗證碼 -->
							<script>
							function refresh_code(){ 
								document.getElementById("imgcode").src="{{$script.captcha}}"; 
							} 
							</script>
							<!-- 輸入框 -->
							<b> 驗 證 碼 : </b><input type="text" name="checkword" maxlength="4" autocomplete="off" placeholder="Verify Code"/>
							<!-- 驗證碼 -->
							<p><img id="imgcode" src="{{$script.captcha}}" onclick="refresh_code()" /><br />
							(Push the image and change the verify code)</p>
							<button type="submit" class="btn btn-default">修 改</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

	{else}  {* 不為會員，則要求訪客登入*}
		<script> swal({ title: "請先進行登入", icon: "warning", button: "確定 " }).then(function() { window.location = '{{$script.login}}'; }); </script>
	{/if}
</body>
</html>