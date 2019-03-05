<?php 
	// 隱藏Notice
	error_reporting(E_ALL^E_NOTICE); 

	// 設定smarty的路徑
    	require('smarty_connect.php');
    	$smt=new smarty_connect;

	$smt->assign('title','會員資訊');  // title : 此網頁頁面名稱

	// 連接資料庫
    $link = mysqli_connect("localhost","root","") 
		or die('連結資料庫失敗');
	mysqli_select_db($link,'mydb')	
		or die('載入資料庫失敗');
	mysqli_query($link,'SET CHARACTER SET utf8');

	// 儲存使用者輸入變數
    $id = mysqli_real_escape_string($link,$_POST["id"]);
    $name = mysqli_real_escape_string($link,$_POST["name"]);
    $nname = mysqli_real_escape_string($link,$_POST["nickname"]);
	$g = mysqli_real_escape_string($link,$_POST["gender"]);
	$email = mysqli_real_escape_string($link,$_POST["email"]);
	$phone = mysqli_real_escape_string($link,$_POST["phone"]);
	
	$smt->assign('id', $id);
	$smt->assign('name', $name);
	$smt->assign('nname', $nname);
	$smt->assign('gender', $g);
	$smt->assign('phone', $email);
	$smt->assign('email', $email);

	$input_verification = TRUE;  // 用來記述驗證過程有無錯誤

	////// 判斷輸入是否符合條件
	// (1) 判斷是否為空值
	if(strlen($name) == 0) // Name
	{
		$smt->assign('name', null);
		$input_verification = FALSE;
	}
	else if(strlen($nname) == 0) // Nickname
	{
		$smt->assign('nname', null);
		$input_verification = FALSE;
	}
	else if(strlen($g) == 0) // Gender
	{
		$smt->assign('gender', null);
		$input_verification = FALSE;
	}
	else if(strlen($phone) == 0) // Phone Number
	{
		$smt->assign('phone', null);
		$input_verification = FALSE;
	}
	else if(strlen($email) == 0) // Email
	{
		$smt->assign('email', null);
		$input_verification = FALSE;
	}
	
	// (2) 檢查Email格式
	$smt->assign('emai_format', TRUE);
	if (!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/", $_POST["email"])) 
	{
		$smt->assign('emai_format', FALSE);
		$input_verification = FALSE;
	}

	// 如果使用者的輸入資料皆無錯誤，則進行更新
	if($input_verification == TRUE)
	{
		////// 更新此會員資料
		$sql = "UPDATE member SET Name = '$name', Nickname = '$nname' , Gender = '$g' , Email = '$email' , Phone_number = '$phone' WHERE ID_number = '$id'";

		if ($link->query($sql) === TRUE) 
		{
			$smt->assign('success', TRUE);
			
			// 修改所有關於此會員的文章資料
			$sql = "UPDATE article SET Nickname = '$nname' , Gender = '$g' , Email = '$email' , Phone_number = '$phone' WHERE ID_number = '$id'";
			$result = mysqli_query($link,$sql);

			// 修改所有關於此會員的回覆資料
			$sql = "UPDATE reply SET Nickname = '$nname' WHERE ID_number = '$id'";
			$result = mysqli_query($link,$sql);
		}
		else
		{
			$smt->assign('success', FALSE);
		}
	}
	$link->close();	
	
	$script['CRUD']="CRUD.php";
	$smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

	// 顯示結果，指定讀取樣版
	$smt->display('CRUD_update_post.tpl');
?>