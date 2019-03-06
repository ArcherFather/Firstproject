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
        // 連接資料庫
        $link = mysqli_connect("localhost","root","") 
        or die('連結資料庫失敗');
        mysqli_select_db($link,'ordering_system')	
        or die('載入資料庫失敗');
        mysqli_query($link,'SET CHARACTER SET utf8');

        // 整理庫存
        $id = $_SESSION['ID'];
        $sql = "SELECT * FROM product INNER JOIN cart ON PID = c_PID WHERE c_ID = '$id'";
        $result = mysqli_query($link,$sql) or die("Error");


        try 
        {
            // 開始交易
            mysqli_query($link, "START TRANSACTION"); 

            while ($row = mysqli_fetch_array ($result))
            {
                // 計算當前商品之數量
                $PID_now = $row['PID'];
                $sql_t = "SELECT Amount FROM product WHERE PID = '$PID_now' FOR UPDATE";  // 獲得最新的資訊
                $result_t = mysqli_query($link,$sql_t) or die("Error t");
                $row_t = mysqli_fetch_array ($result_t);

                $remaining_stock = $row_t['Amount']-$row['c_Amount'];  // 計算剩餘庫存

                if($remaining_stock < 0)
                {
                    $smt->assign('out_range', True);   // out_range : 判斷是否有物品沒有庫存
                    $smt->assign('name', $row['Name']);   // script : 儲存所有本頁面需連接的腳本
                    mysqli_query($link, "ROLLBACK");
                    break;
                }

                $c_PID = $row['c_PID'];
                $sql = "UPDATE product SET Amount = '$remaining_stock' WHERE PID = '$c_PID'";
                mysqli_query($link,$sql) or die("Error 1");

                $amount = $row['c_Amount'];
                $sql = "INSERT INTO transaction (ID,PID,Amount) VALUES ('$id','$c_PID','$amount')";
                mysqli_query($link,$sql) or die("Error 2");

                $cid = $row['CID'];
                $sql = "DELETE FROM cart WHERE CID = '$cid'";
                mysqli_query($link,$sql) or die("Error 3");
            }

            mysqli_query($link, "COMMIT");
            $smt->assign('success', TRUE);
        }
        catch ( Exception $e ) {
            mysqli_query($link, "ROLLBACK");
            $smt->assign('success', FALSE);
        }
        
        $link->close();

        $script['cart']="cart.php";
        $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本
    
        // 顯示結果，指定讀取樣版
        $smt->display('buy_cart.tpl');
    }
?>