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
<style>
    .page{
        text-align:center;
    }
</style>
</head><!--/head-->
<body>
    {* (1) 判斷$search是否為空值 *}
    {if ! isset($search)}
        <script> swal({ title: "請輸入欲搜尋的關鍵字", icon: "warning" ,button: "確 定 " }).then(function() { history.go(-1); }); </script>
        {return}
    {/if}

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
								<li><a href=""><i class="fa fa-user"></i> 帳號資訊</a></li>
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
					<div class="col-sm-3" >
					<form action="{$script.search_post}" method="get">
						<select name="field" style="width: 60px; height: 35px; background-color:#DEDEDE; color: #4D4D4D; border-radius: 5px;">
							<option value="1" {if $field eq 1} selected {/if}>名稱</option>
							<option value="2" {if $field eq 2} selected {/if}>編號</option>
							<option value="3" {if $field eq 3} selected {/if}>品牌</option>
						</select>
						<input type="varchar" name="search" value="{{$search}}" placeholder=" 搜尋商品..." size="30" maxlength="40" style="width: 155px; height: 35px; color:#B2B2B2; background-color:#F0F0E9; border: medium none;">
						<input type="submit" value=" " style="width: 35px; height: 35px; background-image: url(images/home/searchicon.png); background-repeat: no-repeat; background-position:center center;  border: medium none;  border-radius: 5px;">
					</div>
					</form>
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
									<h4 class="panel-title"><a href="{{$script.home}}?category=清潔用品">清潔用品</a></h4>
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
									<h4 class="panel-title"><a href="{{$script.home}}?category=傢俱寢飾">傢俱寢飾</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					</div>
				</div>
				
                {* 商品列表*}
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center" style="font-family:微軟正黑體;">以下顯示 <font color="blue">{{$case}}</font> 與 " <font color="blue">{{$search}}</font> " 相關的結果 ...</h2>
                        
                        {foreach $product as $p}
						{* 商品資訊*}
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{$p.Image}}" alt="" width:auto height=237px />
                                            <h2>${{$p.Price}}</h2>
                                            <p>{if $field eq 1} {$p.Name|truncate:19|replace:{{$search}}:"<font color =#0000e3>{{$search}}</font>"} {else} {{$p.Name|truncate:19}} {/if}</p>
                                            <a href="{{$script.detail}}? PID={{$p.PID}}" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>Detail</a>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a><i class="fa fa-plus-square"></i>商品編號 : {if $field eq 2} {$p.PID|truncate:5|replace:{{$search}}:"<font color =#0000e3>{{$search}}</font>"} {else} {{$p.PID|truncate:7}} {/if}</a></li>
                                            <li><a><i class="fa fa-plus-square"></i>品牌 : {if $field eq 3} {$p.Brand|truncate:5|replace:{{$search}}:"<font color =#0000e3>{{$search}}</font>"} {else} {{$p.Brand|truncate:7}} {/if}</a></li>
                                        </ul>
								    </div>
                                </div>
                            </div>
                        {/foreach} 
					</div><!--features_items-->
                    
                    <div class="page">
                        {* 頁數顯示 *}
                        共 {$data_nums} 筆 - 在第 {$page} 頁 - 共 {$pages} 頁
                        {if $pages gt 1}
                            <br /><a href="? page=1 & category={$category}">首頁 </a>第 
                            {for $i=1 to {$pages}}
                                {if {$page}-5 lt $i && $i lt {$page}+5}
                                        <a href="? page={$i} & category={$category}">{$i}</a>
                                {/if}
                            {/for}
                            頁 <a href="? page={$pages} & category={$category}"> 末頁</a><br /><br />
                        {/if}
                    </div>

				</div>
			</div>
		</div>

	</section>
	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>