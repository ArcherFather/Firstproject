<?php
/* Smarty version 3.1.33, created on 2019-03-04 07:32:16
  from 'C:\xampp\htdocs\smarty\訂購系統\templates\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cc6700ce1b4_55879529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f88a2b5966ddc0ee4ac3e0846d874116c6694853' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\訂購系統\\templates\\cart.tpl',
      1 => 1551681126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cc6700ce1b4_55879529 (Smarty_Internal_Template $_smarty_tpl) {
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

		<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
">Home</a></li>
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

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
						<tr align="center">
							<td class="cart_product">
								<a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['detail'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
? PID=<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['PID'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['Image'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
" width=85px height=84px alt=""></a>
							</td>
							<td class="cart_description" align="left">
								<h4><a href="" style="font-family:微軟正黑體;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['Name'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</a></h4>
								<p>商 品 編 號 : <?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['PID'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</p>
							</td>
							<td class="cart_price">
								<p>$<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['Price'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
</p>
							</td>
							<td class="cart_price">
								<p><?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['c_Amount'];
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['Price']*$_smarty_tpl->tpl_vars['p']->value['c_Amount'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
</p>
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
											}).then(function() { window.location = "<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['delete_cart'];
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
? CID=<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['CID'];
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
" });
										} else {
											swal("已取消移除");
										}
									});'>
								<i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3 align=right>
					<font color = #696763>Total Price : </font><font color = #FE980F>$<?php ob_start();
echo $_smarty_tpl->tpl_vars['total_price']->value;
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
 </font>
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
								window.location = "<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['buy'];
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
"
							} else {
								swal("已取消移除");
							}
					});'>
					Buy these!!</a>
				</h3>
			</div>
		</div>
	</section><!--/#do_action-->
	


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
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
'; }); <?php echo '</script'; ?>
>
	<?php }?>
</body>
</html><?php }
}
