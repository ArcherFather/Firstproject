<?php
    // 設定smarty的路徑
    require('smarty_connect.php');
    $smt=new smarty_connect;

    // 隱藏Notice
    error_reporting(E_ALL^E_NOTICE); 

    //// 判斷是否登入，顯示不同權限
    //判斷session是否已啟動
	if(!isset($_SESSION)){
		session_start();
    }

    // 如果使用者為會員，則加入購物車
    if($_SESSION['Permission'] > 0)
    {
        $cid = $_GET['CID'];

        // 連接資料庫
        $link = mysqli_connect("localhost","root","") 
        or die('連結資料庫失敗');
        mysqli_select_db($link,'ordering_system')	
        or die('載入資料庫失敗');
        mysqli_query($link,'SET CHARACTER SET utf8');

        $sql = "DELETE FROM cart WHERE CID = '$cid'";
        mysqli_query($link,$sql) or die("Error 1");
    
        $link->close();
    
        header("Location:".getenv("HTTP_REFERER"));  // 跳回至上一頁(調用介面)
    }
?>