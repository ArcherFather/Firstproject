<?php
    // 設定smarty的路徑
    require('smarty_connect.php');
    $smt=new smarty_connect;

    // 隱藏Notice
    error_reporting(E_ALL^E_NOTICE); 

    $smt->assign('title_window','購物車');  // title_window : 此網頁頁面名稱

    //// 判斷是否登入，顯示不同權限
    //判斷session是否已啟動
	if(!isset($_SESSION)){
		session_start();
    }

    // 如果使用者為會員，則加入購物車
    if($_SESSION['Permission'] > 0)
    {
        ////////////////////////////// 上方帳號資訊列 ////////////////////////////////////
        $smt->assign('permission_user', $_SESSION['Permission']);  // permission_now : 當前使用者全限
        $smt->assign('name_user', $_SESSION['Name']);   // nname_now : 當前使用者暱稱


        ////////////////////////////// 商品列表 ////////////////////////////////////
        // 連接資料庫
        $link = mysqli_connect("localhost","root","") 
            or die('連結資料庫失敗');
        mysqli_select_db($link,'ordering_system')	
            or die('載入資料庫失敗');
        mysqli_query($link,'SET CHARACTER SET utf8');

        $id = $_SESSION['ID'];
        $sql = "SELECT * FROM cart INNER JOIN product ON PID = c_PID WHERE c_ID = '$id'"; // 表單內容排序
        $result = mysqli_query($link,$sql) or die("Error");

        $total_price = 0;  // 紀錄購物車商品的總價

        while ($row = mysqli_fetch_array ($result))
        {
            $row['Name']=mysqli_real_escape_string($link,$row['Name']);
            $row['Image']=mysqli_real_escape_string($link,$row['Image']);
            $row['Price']=mysqli_real_escape_string($link,$row['Price']);
            $row['c_Amount']=mysqli_real_escape_string($link,$row['c_Amount']);
            $product[] = $row;

            $total_price += ($row['Price'] * $row['c_Amount']);
        }
    }

    $smt->assign('total_price',$total_price);  // total_price : 購物車商品的總價
    $smt->assign('product',$product);  // product : 所有購物車商品
    $script['home']="main.php";
    $script['login']="login.php";
    $script['delete_cart']="delete_cart.php";
    $script['detail']="product-details.php";
    $script['buy']="buy_cart.php";
    $script['ac_infor']="account_information.php";
    $script['search_post']="search_post.php";
    $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

    // 顯示結果，指定讀取樣版
    $smt->display('cart.tpl');
?>