<?php 
	// 隱藏Notice
	error_reporting(E_ALL^E_NOTICE); 

	// 設定smarty的路徑
    	require('smarty_connect.php');
    	$smt=new smarty_connect;

	$smt->assign('title','登出');  // title : 此網頁頁面名稱
	$script['menu']="menu.php";
	$smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本
    session_start(); 
    session_destroy();  // 清除所有session

    // 顯示結果，指定讀取樣版
	$smt->display('logout.tpl');
?>
