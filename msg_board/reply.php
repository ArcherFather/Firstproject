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

    // 接收使用者鎖鑰回覆之文章主題
    $title = $_GET["Title"];

    $smt->assign('title_window','回覆文章');  // title : 此網頁頁面名稱
    $smt->assign('title' ,$title);  // title : 使用者欲回覆之主題
    $smt->assign('permission_now',$_SESSION['Permission']);  // permission_now : 當前使用者之權限
    $script['post']="reply_post.php";
    $script['captcha']="captcha.php";
    $script['login']="login.php";
    $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本
    
    // 顯示結果，指定讀取樣版
    $smt->display('reply.tpl');
?>