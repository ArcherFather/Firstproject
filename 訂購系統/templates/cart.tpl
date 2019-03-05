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
					<div class="col-sm-3">
						<form action="{{$script.search_post}}" method="get">
							<select name="field" style="width: 60px; height: 35px; background-color:#DEDEDE; color: #4D4D4D; border-radius: 5px;">
								<option value="1">名稱</option>
								<option value="2">編號</option>
								<option value="3">品牌</option>
							</select>
							<input type="varchar" name="search" placeholder=" 搜尋商品..." size="30" maxlength="40" style="width: 155px; height: 35px; color:#B2B2B2; background-color:#F0F0E9; border: medium none;">
							<input type="submit" value=" " style="width: 35px; height: 35px; background-image: url(images/home/searchicon.png); background-repeat: no-repeat; background-position:center center;  border: medium none;  border-radius: 5px;">
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	{* 購物車內容 *}
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{$script.home}}">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu" align="center">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

					{foreach $product as $p}
						<tr align="center">
							<td class="cart_product">
								<a href="{{$script.detail}}? PID={{$p.PID}}"><img src="{{$p.Image}}" width=85px height=84px alt=""></a>
							</td>
							<td class="cart_description" align="left">
								<h4><a href="" style="font-family:微軟正黑體;">{{$p.Name}}</a></h4>
								<p>商 品 編 號 : {{$p.PID}}</p>
							</td>
							<td class="cart_price">
								<p>${{$p.Price}}</p>
							</td>
							<td class="cart_price">
								<p>{{$p.c_Amount}}</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">${{$p.Price * $p.c_Amount}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" onclick='
									swal({
										title: "確定將此商品從購物車移除嗎?",
										icon: "warning",
										buttons: ["取 消","確 定"],
									})
									.then((willDelete) => {
										if (willDelete) {
											swal("成功移除", {
											icon: "success",
											}).then(function() { window.location = "{{$script.delete_cart}}? CID={{$p.CID}}" });
										} else {
											swal("已取消移除");
										}
									});'>
								<i class="fa fa-times"></i></a>
							</td>
						</tr>
					{/foreach}

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3 align=right>
					<font color = #696763>Total Price : </font><font color = #FE980F>${{$total_price}} </font>
				</h3>
				<h3 align=right>
					<a class="btn btn-default update"  onclick='
						swal({
							title: "確定要購買這些商品嗎?",
							text: "售後一概不得退貨",
							icon: "warning",
							buttons: ["取 消","確 定"],
						})
						.then((willDelete) => {
							if (willDelete) {
								window.location = "{{$script.buy}}"
							} else {
								swal("已取消移除");
							}
					});'>
					Buy these!!</a>
				</h3>
			</div>
		</div>
	</section><!--/#do_action-->
	


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