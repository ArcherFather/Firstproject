<?php 
	// 隱藏Notice
	error_reporting(E_ALL^E_NOTICE); 

	// 設定smarty的路徑
    	require('smarty_connect.php');
    	$smt=new smarty_connect;

	$smt->assign('title_window','系統訊息');  // title : 此網頁頁面名稱

	// 連接資料庫
    $link = mysqli_connect("localhost","root","") 
		or die('連結資料庫失敗');
	mysqli_select_db($link,'mydb')	
		or die('載入資料庫失敗');
	mysqli_query($link,'SET CHARACTER SET utf8');
	
	// 儲存使用者輸入變數
	// mysqli_real_escape_string --> 在特殊字元前都會加入\，防止SQL injection
	$nname = mysqli_real_escape_string($link,$_POST["nickname"]);
	$g = mysqli_real_escape_string($link,$_POST["gender"]);
	$email = mysqli_real_escape_string($link,$_POST["email"]);
	$phone = mysqli_real_escape_string($link,$_POST["phone"]);
	$title =htmlspecialchars($_POST["title"],ENT_QUOTES);
	$title = mysqli_real_escape_string($link,$title);
	$content = htmlspecialchars($_POST["content"],ENT_QUOTES);
	$content = mysqli_real_escape_string($link,$content);
	
	$smt->assign('nname', $nname);
	$smt->assign('phone', $phone);
	$smt->assign('email', $email);
	$smt->assign('title', $title);
	$smt->assign('content', $content);

	$input_verification = TRUE;  // 用來記述驗證過程有無錯誤

	////// 判斷輸入是否符合條件
	if(strlen($nname) == 0) // Nickname
	{
		$smt->assign('nname', null);
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
	else if(strlen($title) == 0) // Title
	{
		$smt->assign('title', null);
		$input_verification = FALSE;
	}
	else if(strlen($content) == 0) // Content
	{
		$smt->assign('content', null);
		$input_verification = FALSE;
	}
	
	// (2) 檢查Email格式
	$smt->assign('emai_format', TRUE);
	if (!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/", $_POST["email"])) 
	{
		$smt->assign('emai_format', FALSE);
		$input_verification = FALSE;
	}
	
	// (3) 判斷驗證碼是否正確
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
			$input_verification = FALSE;
		 }
	}
	else  //判斷使用者輸入之驗證碼是否為空
	{
		$smt->assign('verification', FALSE);
		$input_verification = FALSE;
	}
	
	// 如果使用者的輸入資料皆無錯誤，則進行註冊
	if($input_verification == TRUE)
	{
		// 儲存發文者帳號與權限
	if($_SESSION['Permission'] != null)  // 如果目前是有登入狀態
	{
		$id = mysqli_real_escape_string($link,$_SESSION['ID_number']);
		$p = $_SESSION['Permission'];
		}
		else
		{
			$id = null;
			$p = 0;
		}

		////// 將此文章資料匯入資料庫
		$sql = "INSERT INTO article (Title,Content,Nickname,ID_number,Gender,Phone_number,Email,Permission) VALUES ('$title','$content','$nname','$id','$g','$phone','$email','$p')";
		
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

	$script['board']="board.php";
	$smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

	// 顯示結果，指定讀取樣版
	$smt->display('leave_message_post.tpl');
?>
