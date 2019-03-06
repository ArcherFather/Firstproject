<?php 
	// 隱藏Notice
	error_reporting(E_ALL^E_NOTICE); 

    	// 設定smarty的路徑
    	require('smarty_connect.php');
    	$smt=new smarty_connect;

	$smt->assign('title','註冊帳號');  // title : 此網頁頁面名稱

	// 連接資料庫
    $link = mysqli_connect("localhost","root","") 
		or die('連結資料庫失敗');
	mysqli_select_db($link,'mydb')	
		or die('載入資料庫失敗');
	mysqli_query($link,'SET CHARACTER SET utf8');
	
	// 儲存使用者輸入變數
	// mysqli_real_escape_string --> 在特殊字元前都會加入\，防止SQL injection
	$id = mysqli_real_escape_string($link,$_POST["id"]);
	$pd = mysqli_real_escape_string($link,$_POST["pd"]);
	$name = mysqli_real_escape_string($link,$_POST["name"]);
	$nname = mysqli_real_escape_string($link,$_POST["nickname"]);
	$g = mysqli_real_escape_string($link,$_POST["gender"]);
	$email = mysqli_real_escape_string($link,$_POST["email"]);
	$phone = mysqli_real_escape_string($link,$_POST["phone"]);
	
	$smt->assign('id', $id);
	$smt->assign('pd', $pd);
	$smt->assign('name', $name);
	$smt->assign('nname', $nname);
	$smt->assign('gender', $g);
	$smt->assign('phone', $phone);
	$smt->assign('email', $email);

	$input_data = TRUE;  // 用來記述驗證過程有無錯誤

	////// 判斷輸入是否符合條件
	// (1)判斷是否為空值
	if(strlen($id) == 0) // ID_number
	{
		$smt->assign('id', null);
		$input_data = FALSE;
	}
	else if(strlen($pd) == 0) // Password
	{
		$smt->assign('pd', null);
		$input_data = FALSE;
	}
	else if(strlen($name) == 0) // Name
	{
		$smt->assign('name', null);
		$input_data = FALSE;
	}
	else if(strlen($nname) == 0) // Nickname
	{
		$smt->assign('nname', null);
		$input_data = FALSE;
	}
	else if(strlen($g) == 0) // Gender
	{
		$smt->assign('gender', null);
		$input_data = FALSE;
	}
	else if(strlen($phone) == 0) // Phone Number
	{
		$smt->assign('phone', null);
		$input_data = FALSE;
	}
	else if(strlen($email) == 0) // Email
	{
		$smt->assign('email', null);
		$input_data = FALSE;
	}
	
	// (2)判斷ID_number是否重複
	$id_sql = "select name from member where ID_number='$id' limit 1";
	$id_result = mysqli_query($link,$id_sql);
	$num = mysqli_fetch_array($id_result);
	$smt->assign('id_unique', TRUE);

	if($num['name']!='')
	{
		$smt->assign('id_unique', FALSE);
		$input_data = FALSE;
	}

	// (3) 檢查帳號格式
	$smt->assign('id_format', TRUE);
	// 由數字和英文字母組成的字符串
	if (!preg_match("/^[A-Za-z0-9_]+$/", $id))
	{
		$smt->assign('id_format', FALSE);
		$input_data = FALSE;
	}

	// (4) 檢查密碼格式
	$smt->assign('pd_format', TRUE);
	// 可以包含數字、字母、下底線，並且要同時含有數字和字母，且長度要在8~16位之間
	if (!preg_match("/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z_]{6,16}$/", $pd))
	{
		$smt->assign('pd_format', FALSE);
		$input_data = FALSE;
	}

	// (5) 檢查Email格式
	$smt->assign('emai_format', TRUE);
	// /([\w\-]+\@[\w\-]+\.[\w\-]+)/
	if (!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/", $_POST["email"])) 
	{
		$smt->assign('emai_format', FALSE);
		$input_data = FALSE;
	}
	
	// (6) 判斷驗證碼是否正確
	if(!isset($_SESSION)){
    session_start();
    }  //判斷session是否已啟動

	//判斷此兩個變數是否為空
	$smt->assign('verification', TRUE);
	if((!empty($_SESSION['check_word'])) && (!empty($_POST['checkword'])))
	{  	
		 if($_SESSION['check_word'] != $_POST['checkword'])
		 {
			$smt->assign('verification', FALSE);
			$input_data = FALSE;
		 }
	}
	else  //判斷使用者輸入之驗證碼是否為空
	{
		$smt->assign('verification', FALSE);
		$input_data = FALSE;
	}
	
	// 如果使用者的輸入資料皆無錯誤，則進行註冊
	if($input_data == TRUE)
	{
		////// 將使用者資料匯入資料庫
		// mysqli_real_escape_string --> 在特殊字元前都會加入\，防止SQL injection
		$pd = password_hash($pd, PASSWORD_DEFAULT);  // 密碼輸入至資料庫須加密
		$sql = "INSERT INTO member (ID_number,Password,Name,Nickname,Gender,Email,Phone_number,Permission) VALUES ('$id','$pd','$name','$nname','$g','$email','$phone',1)";
		
		if ($link->query($sql) === TRUE) 
		{
			$smt->assign('success', TRUE);
		} 
		else 
		{
			$smt->assign('success', FALSE);
		}
	}
	$link->close();	

	$script['menu']="menu.php";
	$smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

	// 顯示結果，指定讀取樣版
	$smt->display('register_post.tpl');
?>