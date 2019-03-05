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
    // htmlspecialchars --> 能防止XSS攻擊
	$content = htmlspecialchars($_POST["content"]);
	$content = mysqli_real_escape_string($link,$content);
	$smt->assign('content', $content);

	$input_verification = TRUE;  // 用來記述驗證過程有無錯誤

	////// 判斷輸入是否符合條件
	// (1) 判斷是否為空值
	if(strlen($content) == 0) // Content
	{
		$smt->assign('content', null);
		$input_verification = FALSE;
	}
	
	// (3) 判斷驗證碼是否正確
	//判斷session是否已啟動
	if(!isset($_SESSION))
		session_start();

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
	
	// 如果使用者的輸入資料皆無錯誤，則儲存回覆
	if($input_verification == TRUE)
	{
		 // 儲存回覆者資訊
		 $nname = mysqli_real_escape_string($link,$_SESSION['Nickname']);
		 $id = mysqli_real_escape_string($link,$_SESSION['ID_number']);
		 $AID = mysqli_real_escape_string($link,$_SESSION['Now_AID']);
	 
		 ////// 將此回覆匯入資料庫
		 $sql = "INSERT INTO reply (Nickname,Content,ID_number,AID) VALUES ('$nname','$content','$id','$AID')";
		 
		 if ($link->query($sql) === TRUE) {
			$smt->assign('success', TRUE);
		 } else {
			$smt->assign('success', FALSE);
		 }
	}

	$link->close();	

	// 顯示結果，指定讀取樣版
	$smt->display('reply_post.tpl');
?>