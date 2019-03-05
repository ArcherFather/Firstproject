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

	{* 購物車內容 *}
	<section id="cart_items">
		<div class="container">
			<div style="position:relative;top:20px;left:40%; font-family: 微軟正黑體;">
				{* 如果使用者為會員，顯示帳號資訊 *}
				<b><font color=#FE980F size=4>帳 號 資 訊</font></b><br><br>
				<b>帳號 : </b> {$account} <br><br>
				<b>姓名 : </b> {$name} <br><br>
				<b>聯絡電話 : </b> {$phone} <br><br>
				<b>Email : </b> {$email} <br><br>
				<b>級別 : </b> {$status} <br><br>
				<a class="btn btn-default update" onclick="location.href='{{$script.update}}'">修改資料</a>
			</div>
		</div>
	</section> <!--/#cart_items-->
	


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