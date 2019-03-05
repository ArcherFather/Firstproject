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

    $smt->assign('title_window','修改會員資訊');  // title : 此網頁頁面名稱

    $smt->assign('id', $_SESSION['ID_number']);  // ID_number : 當前使用者之帳號
    $smt->assign('name', $_SESSION['Name']);  // Name : 當前使用者之姓名
    $smt->assign('nname', $_SESSION['Nickname']);  // Nickname : 當前使用者之暱稱
    $smt->assign('gender',$_SESSION['Gender']);  // Gender : 當前使用者之性別
    $smt->assign('phone',$_SESSION['Phone_number']);  // Phone_number : 當前使用者之電話
    $smt->assign('email',$_SESSION['Email']);  // Email : 當前使用者之email

    $script['post']="account_information_update_post.php";
    $script['captcha']="captcha.php";
    $script['menu']="menu.php";
    $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本
    
  // 顯示結果，指定讀取樣版
  $smt->display('account_information_update.tpl');
?>