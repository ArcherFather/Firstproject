<?php
    // 隱藏Notice
    error_reporting(E_ALL^E_NOTICE); 

    // 設定smarty的路徑
    require('smarty_connect.php');
    $smt=new smarty_connect;
    $smt->assign('title','主畫面');  // title : 此網頁頁面名稱

    //// 判斷是否登入，顯示不同權限
    //判斷session是否已啟動
	if(!isset($_SESSION)){
		session_start();
    }

    ////////////////////////////// 上方帳號資訊列 ////////////////////////////////////
    $smt->assign('permission_user', $_SESSION['Permission']);  // permission_now : 當前使用者全限
    $smt->assign('nname_user', $_SESSION['Nickname']);   // nname_now : 當前使用者暱稱
    $script['regist']="register.php";
    $script['login']="login.php";
    $script['logout']="logout.php";
    $script['CRUD']="CRUD.php";
    $script['board']="board.php";
    $script['account']="account_information.php";
	$smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本
    
    // 顯示結果，指定讀取樣版
	$smt->display('menu.tpl');
?>