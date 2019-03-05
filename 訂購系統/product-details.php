<?php
    // 設定smarty的路徑
    require('smarty_connect.php');
    $smt=new smarty_connect;

    // 隱藏Notice
    error_reporting(E_ALL^E_NOTICE); 

    $smt->assign('title_window','好好買購物網');  // title : 此網頁頁面名稱

    //// 判斷是否登入，顯示不同權限
    //判斷session是否已啟動
	if(!isset($_SESSION)){
		session_start();
    }

    ////////////////////////////// 上方帳號資訊列 ////////////////////////////////////
    $smt->assign('permission_user', $_SESSION['Permission']);  // permission_now : 當前使用者全限
    $smt->assign('name_user', $_SESSION['Name']);   // nname_now : 當前使用者暱稱


    ////////////////////////////// 中間商品資訊列 ////////////////////////////////////
    // 接收使用者所選之商品PID
    $PID = htmlspecialchars($_GET["PID"],ENT_QUOTES);

    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
    or die('連結資料庫失敗');
    mysqli_select_db($link,'ordering_system')	
    or die('載入資料庫失敗');
    mysqli_query($link,'SET CHARACTER SET utf8');

    // 取出該PID之商品資訊
    $sql = "SELECT * FROM product WHERE PID = '$PID'"; // 表單內容排序
    $result = mysqli_query($link,$sql) or die("Error");
    $num = mysqli_fetch_array($result);

    // 提供當前商品資訊
    $smt->assign('PID', $num['PID']);  // PID : 此商品編號
    $smt->assign('name', $num['Name']);  // name : 此商品名稱
    $smt->assign('category', $num['Category']);  // category : 此商品類別
    $smt->assign('brand', $num['Brand']);  // brand : 此商品品牌
    $smt->assign('price', $num['Price']);  // price : 此商品價錢
    $smt->assign('amount', $num['Amount']);  // amount : 此商品庫存數量
    $smt->assign('image', $num['Image']);  // image : 此商品圖片
    $smt->assign('information', $num['Information']);  // information : 此商品介紹


    $script['home']="main.php";
    $script['add_cart']="add_cart.php";
    $script['login']="login.php";
    $script['logout']="logout.php";
    $script['cart']="cart.php";
    $script['search_post']="search_post.php";
    $script['ac_infor']="account_information.php";
    $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

    // 顯示結果，指定讀取樣版
    $smt->display('product-details.tpl');
?>