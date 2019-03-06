<?php 
	// 隱藏Notice
	error_reporting(E_ALL^E_NOTICE); 

	// 設定smarty的路徑
    	require('smarty_connect.php');
    	$smt=new smarty_connect;

    // 接收管理者所選之帳號ID
    $id = $_GET["ID_number"];

    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
    or die('連結資料庫失敗');
    mysqli_select_db($link,'mydb')	
    or die('載入資料庫失敗');
    mysqli_query($link,'SET CHARACTER SET utf8');

    $sql = "SELECT * FROM member WHERE ID_number = '$id' LIMIT 1";
    $result = mysqli_query($link,$sql) or die("Error 1");
	$num = mysqli_fetch_array($result);
	
	$smt->assign('id', $num['ID_number']);  // id : 此會員的帳號
	$smt->assign('name', $num['Name']);  // name : 此會員的姓名
	$smt->assign('nname', $num['Nickname']);  // nname : 此會員的暱稱
	$smt->assign('gender', $num['Gender']);  // gender : 此會員的性別
	$smt->assign('phone', $num['Phone_number']);  // phone : 此會員的電話號碼
	$smt->assign('email', $num['Email']);  // email : 此會員的Email

	$link->close();	

	// 傳遞腳本參數
	$script['post']="CRUD_update_post.php";
	$script['CRUD']="CRUD.php";
	$smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

	// 顯示結果，指定讀取樣版
	$smt->display('CRUD_update.tpl');
?>
