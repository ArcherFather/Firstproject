<?php
/* Smarty version 3.1.33, created on 2019-03-04 06:32:22
  from 'C:\xampp\htdocs\smarty\訂購系統\templates\search_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7cb866bdbe96_16152016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29aa2234ab55f3ef316954125d0e4df680e601d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\訂購系統\\templates\\search_post.tpl',
      1 => 1551677517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7cb866bdbe96_16152016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
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
<style>
    .page{
        text-align:center;
    }
</style>
</head><!--/head-->
<body>
        <?php if (!isset($_smarty_tpl->tpl_vars['search']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "請輸入欲搜尋的關鍵字", icon: "warning" ,button: "確 定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
        <?php return;?>
    <?php }?>

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
								<li><a href=""><i class="fa fa-user"></i> 帳號資訊</a></li>
								<li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['cart'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
"><i class="fa fa-shopping-cart"></i> 購物車</a></li>
								<li><a href='<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['logout'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
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
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" class="active">Home</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3" >
					<form action="<?php echo $_smarty_tpl->tpl_vars['script']->value['search_post'];?>
" method="get">
						<select name="field" style="width: 60px; height: 35px; background-color:#DEDEDE; color: #4D4D4D; border-radius: 5px;">
							<option value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value == 1) {?> selected <?php }?>>名稱</option>
							<option value="2" <?php if ($_smarty_tpl->tpl_vars['field']->value == 2) {?> selected <?php }?>>編號</option>
							<option value="3" <?php if ($_smarty_tpl->tpl_vars['field']->value == 3) {?> selected <?php }?>>品牌</option>
						</select>
						<input type="varchar" name="search" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" placeholder=" 搜尋商品..." size="30" maxlength="40" style="width: 155px; height: 35px; color:#B2B2B2; background-color:#F0F0E9; border: medium none;">
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

                    					<div class="left-sidebar">
						<h2 style="font-family:微軟正黑體;">商 品 類 別</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
?category=電子產品">電子產品</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
?category=生鮮冷藏">生鮮冷藏</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
?category=飲料零食">飲料零食</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
?category=美妝護理">美妝護理</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
?category=清潔用品">清潔用品</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
?category=大小家電">大小家電</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
?category=服飾鞋包">服飾鞋包</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['home'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
?category=傢俱寢飾">傢俱寢飾</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					</div>
				</div>
				
                				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center" style="font-family:微軟正黑體;">以下顯示 <font color="blue"><?php ob_start();
echo $_smarty_tpl->tpl_vars['case']->value;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
</font> 與 " <font color="blue"><?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
</font> " 相關的結果 ...</h2>
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
						                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['Image'];
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
" alt="" width:auto height=237px />
                                            <h2>$<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['Price'];
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
</h2>
                                            <p><?php if ($_smarty_tpl->tpl_vars['field']->value == 1) {?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable20 = ob_get_clean();
ob_start();
echo $_prefixVariable20;
$_prefixVariable21 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable22 = ob_get_clean();
ob_start();
echo $_prefixVariable22;
$_prefixVariable23=ob_get_clean();
echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['Name'],19),$_prefixVariable21,"<font color =#0000e3>".$_prefixVariable23."</font>");?>
 <?php } else { ?> <?php ob_start();
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['Name'],19);
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
 <?php }?></p>
                                            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['script']->value['detail'];
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
? PID=<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value['PID'];
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>Detail</a>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a><i class="fa fa-plus-square"></i>商品編號 : <?php if ($_smarty_tpl->tpl_vars['field']->value == 2) {?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable27 = ob_get_clean();
ob_start();
echo $_prefixVariable27;
$_prefixVariable28 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable29 = ob_get_clean();
ob_start();
echo $_prefixVariable29;
$_prefixVariable30=ob_get_clean();
echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['PID'],5),$_prefixVariable28,"<font color =#0000e3>".$_prefixVariable30."</font>");?>
 <?php } else { ?> <?php ob_start();
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['PID'],7);
$_prefixVariable31 = ob_get_clean();
echo $_prefixVariable31;?>
 <?php }?></a></li>
                                            <li><a><i class="fa fa-plus-square"></i>品牌 : <?php if ($_smarty_tpl->tpl_vars['field']->value == 3) {?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable32 = ob_get_clean();
ob_start();
echo $_prefixVariable32;
$_prefixVariable33 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable34 = ob_get_clean();
ob_start();
echo $_prefixVariable34;
$_prefixVariable35=ob_get_clean();
echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['Brand'],5),$_prefixVariable33,"<font color =#0000e3>".$_prefixVariable35."</font>");?>
 <?php } else { ?> <?php ob_start();
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['Brand'],7);
$_prefixVariable36 = ob_get_clean();
echo $_prefixVariable36;?>
 <?php }?></a></li>
                                        </ul>
								    </div>
                                </div>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
					</div><!--features_items-->
                    
                    <div class="page">
                                                共 <?php echo $_smarty_tpl->tpl_vars['data_nums']->value;?>
 筆 - 在第 <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 頁 - 共 <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
 頁
                        <?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
                            <br /><a href="? page=1 & category=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">首頁 </a>第 
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['pages']->value;
$_prefixVariable37 = ob_get_clean();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_prefixVariable37+1 - (1) : 1-($_prefixVariable37)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable38 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable39 = ob_get_clean();
if ($_prefixVariable38-5 < $_smarty_tpl->tpl_vars['i']->value && $_smarty_tpl->tpl_vars['i']->value < $_prefixVariable39+5) {?>
                                        <a href="? page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 & category=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                                <?php }?>
                            <?php }
}
?>
                            頁 <a href="? page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
 & category=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
"> 末頁</a><br /><br />
                        <?php }?>
                    </div>

				</div>
			</div>
		</div>

	</section>
	
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
 src="js/price-range.js"><?php echo '</script'; ?>
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
