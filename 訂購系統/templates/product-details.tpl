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
								<li><a href="{{$script.home}}">Home</a></li>
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
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
          {* 左側分類列表*}
					<div class="left-sidebar">
						<h2 style="font-family:微軟正黑體;">商 品 類 別</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{$script.home}}?category=電子產品">電子產品</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{$script.home}}?category=生鮮冷藏">生鮮冷藏</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{$script.home}}?category=飲料零食">飲料零食</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{$script.home}}?category=美妝護理">美妝護理</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{$script.home}}?category=清潔用品"> 清潔用品 </a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{$script.home}}?category=大小家電">大小家電</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{$script.home}}?category=服飾鞋包">服飾鞋包</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href=?category=傢俱寢飾>傢俱寢飾</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
					{* 商品圖像 *}
						<div class="col-sm-5">
							<div class="view-product">
								<!-- 主要商品圖 (大圖) -->
								<img src="{{$image}}" width=266px height=266px alt="" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- 商品圖一覽 (小圖) -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{$image}}" width=85px height=84px alt=""></a>
										  <a href=""><img src="#" alt=""></a>
										  <a href=""><img src="#" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{$image}}" width=85px height=84px alt=""></a>
										  <a href=""><img src="#" alt=""></a>
										  <a href=""><img src="#" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							{* 商品資訊 *}
							<div class="product-information"><!--/product-information-->
								<h2 style="font-family:微軟正黑體;">{{$name}}</h2>
								<p>商 品 編 號 : {{$PID}}</p>
								<img src="#" alt="" /> {* 星數 *}
								<span>

								<form action="{{$script.add_cart}}" method="post">
									<span>TW ${{$price}}</span>
									<label style="font-family:微軟正黑體;">數量 :</label>
									<input type="number" name="amount" value="1" min="1" max="{{$amount}}" step="1" oninput="if(value.length>2)value=value.slice(0,2)"/>
									<input type="hidden" name="PID" value="{{$PID}}">
									<input type="hidden" name="max_amount" value="{{$amount}}">

									{if $amount <= 0}
									<button type="submit" class="btn btn-fefault cart" style="background-color:gray;" disabled >
										<i class="fa fa-shopping-cart"></i>
										缺貨中
									</button>
									{else}
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										加入購物車
									</button>
									{/if}
									</form>

								</span>
								<p><b>庫 存 :</b> {{$amount}} </p>
								<p><b>商 品 類 別 :</b> {{$category}} </p>
								<p><b>品 牌 :</b> {{$brand}} </p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Details</a></li>
							</ul>
						</div>
							
							{* 商品介紹 *}
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<p style="font-family:微軟正黑體;"> {{$information|nl2br}} </p>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
				</div>
			</div>
		</div>
	</section>
  
  <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/main.js"></script>
</body>
</html>