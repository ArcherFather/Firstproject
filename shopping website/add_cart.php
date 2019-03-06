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

    $smt->assign('permission_user', $_SESSION['Permission']);  // permission_now : 當前使用者全限

    // 如果使用者為會員，則加入購物車
    if($_SESSION['Permission'] > 0)
    {
        // 連接資料庫
        $link = mysqli_connect("localhost","root","") 
            or die('連結資料庫失敗');
        mysqli_select_db($link,'ordering_system')	
            or die('載入資料庫失敗');
        mysqli_query($link,'SET CHARACTER SET utf8');        

        // 接收使用者所選之商品PID
        $pid = htmlspecialchars($_POST['PID']);  // 商品編號
        $max_amount = htmlspecialchars($_POST['max_amount']);  //  該商品之存貨量
        $amount = htmlspecialchars($_POST['amount']);  // 購買數量
        $amount = intval($amount);  // 轉成整數
        $id = $_SESSION['ID'];  // 當前登入者ID

        $input_verification = TRUE;  // 用來記述驗證過程有無錯誤

        // 驗證使用者輸入的購買數量是否合理
        if($amount > $max_amount || $amount < 1)
        {
            $smt->assign('out_range', TRUE);
            $input_verification = FALSE;
        }

        // 檢查使用者購物車數量是否超過限制
        $sql = "SELECT * FROM cart WHERE c_ID = '$id'";
        $result = mysqli_query($link,$sql) or die("Error");
        $data_nums = mysqli_num_rows($result); //統計總比數

        if($data_nums >= 5)
        {
            $smt->assign('full_cart', TRUE);
            $input_verification = FALSE;
        }

        if( $input_verification == TRUE)
        {
            // 加入購物車
            $sql = "INSERT INTO cart (c_ID,c_PID,c_Amount) VALUES ('$id','$pid','$amount')";

            if ($link->query($sql) == TRUE) 
                $smt->assign('success', TRUE);
            else 
                $smt->assign('success', FALSE);
        }
    }

    $script['home']="main.php";
    $script['login']="login.php";
    $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

    // 顯示結果，指定讀取樣版
    $smt->display('add_cart.tpl');
?>