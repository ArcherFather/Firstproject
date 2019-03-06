<?php 
    // 隱藏Notice
    error_reporting(E_ALL^E_NOTICE); 

    // 設定smarty的路徑
    require('smarty_connect.php');
    $smt=new smarty_connect;

    //判斷session是否已啟動
    if(!isset($_SESSION)){
            session_start();
    }

    // 接收使用者所選之文章AID
    $AID = htmlspecialchars($_GET["AID"],ENT_QUOTES);

    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
        or die('連結資料庫失敗');
    mysqli_select_db($link,'mydb')	
        or die('載入資料庫失敗');
    mysqli_query($link,'SET CHARACTER SET utf8');

    // 取出該AID之文章之資料
    $sql = "SELECT * FROM article WHERE AID = '$AID'"; // 表單內容排序
    $result = mysqli_query($link,$sql) or die("Error");
    $num = mysqli_fetch_array($result);

    // 如果當前瀏覽文章者是該文章作者，則允許編輯 (防止改網址)
    if($num['ID_number'] == $_SESSION['ID_number']) 
    {  
        $smt->assign('title_window', $num['Title']);  // title : 此網頁頁面名稱

        $smt->assign('title', $num['Title']);  // Title : 當前文章之主題
        $smt->assign('content',$num['Content']);  // Content : 當前文章之內容

        $script['post']="msg_update_post.php";
        $script['captcha']="captcha.php";
        $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本
            
        // 顯示結果，指定讀取樣版
        $smt->display('msg_update.tpl');
    }
    else
        exit;
?>