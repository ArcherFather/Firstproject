<?php
    // 隱藏Notice
    error_reporting(E_ALL^E_NOTICE); 

    // 設定smarty的路徑
    require('smarty_connect.php');
    $smt=new smarty_connect;
    
    $smt->assign('title_window','登入/註冊');  // title : 此網頁頁面名稱
    $script['home']="main.php";
    $script['lp']="login_post.php";
    $script['rp']="register_post.php";
    $script['captcha']="captcha.php";
    $script['captcha_r']="captcha_r.php";
	$smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本
    
    // 顯示結果，指定讀取樣版
	$smt->display('login.tpl');
?>