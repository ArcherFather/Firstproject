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
	$content = htmlspecialchars($_POST["content"],ENT_QUOTES);
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

	// (2) 判斷驗證碼是否正確
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
        // 修改此文章資料
        $now_RID = $_SESSION['Now_RID'];  // 現在編輯的文章AID
		$sql = "UPDATE reply SET  Content = '$content' WHERE RID = '$now_RID'";

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
    unset($_SESSION['Now_RID']);  // 清除session

	// 顯示結果，指定讀取樣版
	$smt->display('reply_update_post.tpl');
?>
