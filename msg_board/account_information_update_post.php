<?php 
	// 隱藏Notice
	error_reporting(E_ALL^E_NOTICE); 

	// 設定smarty的路徑
    	require('smarty_connect.php');
    	$smt=new smarty_connect;

	$smt->assign('title_window','註冊帳號');  // title : 此網頁頁面名稱

	// 連接資料庫
    $link = mysqli_connect("localhost","root","") 
		or die('連結資料庫失敗');
	mysqli_select_db($link,'mydb')	
		or die('載入資料庫失敗');
	mysqli_query($link,'SET CHARACTER SET utf8');
    
    if(!isset($_SESSION)){
        session_start();
    }  //判斷session是否已啟動
    
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
	$smt->assign('phone', $email);
	$smt->assign('email', $email);

	$input_verification = TRUE;  // 用來記述驗證過程有無錯誤

	////// 判斷輸入是否符合條件
	// (1) 判斷是否為空值
	if(strlen($id) == 0) // ID_number
	{
		$smt->assign('id', null);
		$input_verification = FALSE;
	}
	else if(strlen($pd) == 0) // Password
	{
		$smt->assign('pd', null);
		$input_verification = FALSE;
	}
	else if(strlen($name) == 0) // Name
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
	
    // (2) 判斷ID_number是否重複
    $id_value = $_SESSION['ID'];
	$id_sql = "select name from member where ID_number='$id' && ID != '$id_value' LIMIT 1";
    $id_result = mysqli_query($link,$id_sql);
	$num = mysqli_fetch_array($id_result);
	$smt->assign('id_unique', TRUE);

	if($num['name']!='')
	{
		$smt->assign('id_unique', FALSE);
		$input_verification = FALSE;
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
	if (!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/", $_POST["email"])) 
	{
		$smt->assign('emai_format', FALSE);
		$input_verification = FALSE;
	}
	
	// (6) 判斷驗證碼是否正確
	//判斷此兩個變數是否為空
	$smt->assign('verification', TRUE);
	if((!empty($_SESSION['check_word'])) && (!empty($_POST['checkword'])))
	{  	
		 if($_SESSION['check_word'] != $_POST['checkword'])
		 {
			$smt->assign('verification', FALSE);
			$input_verification = FALSE;
		 }
	}
	else  //判斷使用者輸入之驗證碼是否為空
	{
		$smt->assign('verification', FALSE);
		$input_verification = FALSE;
	}
	
	// 如果使用者的輸入資料皆無錯誤，則進行更新
	if($input_verification == TRUE)
	{
        ////// 更新此會員資料
        $id_value = $_SESSION['ID'];   // id_value : 當前登入的ID編號
        $pd = password_hash($pd, PASSWORD_DEFAULT);  // 密碼輸入至資料庫須加密
        $sql = "UPDATE member SET ID_number = '$id', Password = '$pd', Name = '$name', Nickname = '$nname' , Gender = '$g' , Email = '$email' , Phone_number = '$phone' WHERE ID = '$id_value'";

        if ($link->query($sql) === TRUE) 
        {
            $smt->assign('success', TRUE);

            // 修改所有關於此會員的文章資料
            $id_now = $_SESSION['ID_number'];
            $sql = "UPDATE article SET ID_number = '$id', Nickname = '$nname' , Gender = '$g' , Email = '$email' , Phone_number = '$phone' WHERE ID_number = '$id_now'";
            $result = mysqli_query($link,$sql);

            // 修改所有關於此會員的回覆資料
            $sql = "UPDATE reply SET ID_number = '$id', Nickname = '$nname' WHERE ID_number = '$id_now'";
            $result = mysqli_query($link,$sql);

            // 修改當前登入session的資料
            $_SESSION['ID_number'] = $id;
            $_SESSION['Name'] = $name;
            $_SESSION['Nickname'] = $nname;
            $_SESSION['Gender'] = $g;
            $_SESSION['Phone_number'] = $phone;
            $_SESSION['Email'] = $email;
        }
        else
        {
            $smt->assign('success', FALSE);
        }
	}
	$link->close();	

	$script['account']="account_information.php";
	$smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

	// 顯示結果，指定讀取樣版
	$smt->display('account_information_update_post.tpl');
?>