<?php
/* Smarty version 3.1.33, created on 2019-03-05 02:56:50
  from 'C:\xampp\htdocs\smarty\訂購系統\templates\product-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7dd762864ef0_71706856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '979b82994b8609d1e273d85dcdad741fd6a9cb89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\訂購系統\\templates\\product-details.tpl',
      1 => 1551751007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7dd762864ef0_71706856 (Smarty_Internal_Template $_smarty_tpl) {
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
">Home</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['search_post'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" method="get">
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
          					<div class="left-sidebar">
						<h2 style="font-family:微軟正黑體;">商 品 類 別</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
?category=電子產品">電子產品</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
?category=生鮮冷藏">生鮮冷藏</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
?category=飲料零食">飲料零食</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
?category=美妝護理">美妝護理</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
?category=清潔用品"> 清潔用品 </a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
?category=大小家電">大小家電</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
?category=服飾鞋包">服飾鞋包</a></h4>
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
											<div class="col-sm-5">
							<div class="view-product">
								<!-- 主要商品圖 (大圖) -->
								<img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['image']->value;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
" width=266px height=266px alt="" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- 商品圖一覽 (小圖) -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['image']->value;
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
" width=85px height=84px alt=""></a>
										  <a href=""><img src="#" alt=""></a>
										  <a href=""><img src="#" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['image']->value;
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
" width=85px height=84px alt=""></a>
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
														<div class="product-information"><!--/product-information-->
								<h2 style="font-family:微軟正黑體;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
</h2>
								<p>商 品 編 號 : <?php ob_start();
echo $_smarty_tpl->tpl_vars['PID']->value;
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
</p>
								<img src="#" alt="" /> 								<span>

								<form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['add_cart'];
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
" method="post">
									<span>TW $<?php ob_start();
echo $_smarty_tpl->tpl_vars['price']->value;
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
</span>
									<label style="font-family:微軟正黑體;">數量 :</label>
									<input type="number" name="amount" value="1" min="1" max="<?php ob_start();
echo $_smarty_tpl->tpl_vars['amount']->value;
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
" step="1" oninput="if(value.length>2)value=value.slice(0,2)"/>
									<input type="hidden" name="PID" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['PID']->value;
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
">
									<input type="hidden" name="max_amount" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['amount']->value;
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
">

									<?php if ($_smarty_tpl->tpl_vars['amount']->value <= 0) {?>
									<button type="submit" class="btn btn-fefault cart" style="background-color:gray;" disabled >
										<i class="fa fa-shopping-cart"></i>
										缺貨中
									</button>
									<?php } else { ?>
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										加入購物車
									</button>
									<?php }?>
									</form>

								</span>
								<p><b>庫 存 :</b> <?php ob_start();
echo $_smarty_tpl->tpl_vars['amount']->value;
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
 </p>
								<p><b>商 品 類 別 :</b> <?php ob_start();
echo $_smarty_tpl->tpl_vars['category']->value;
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
 </p>
								<p><b>品 牌 :</b> <?php ob_start();
echo $_smarty_tpl->tpl_vars['brand']->value;
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
 </p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Details</a></li>
							</ul>
						</div>
							
														<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<p style="font-family:微軟正黑體;"> <?php ob_start();
echo nl2br($_smarty_tpl->tpl_vars['information']->value);
$_prefixVariable29 = ob_get_clean();
echo $_prefixVariable29;?>
 </p>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
				</div>
			</div>
		</div>
	</section>
  
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
