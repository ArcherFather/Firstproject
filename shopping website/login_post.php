<?php 
	////////////////////////////// Log-in的判斷 /////////////////////////////////
	// 隱藏Notice
	error_reporting(E_ALL^E_NOTICE); 

	// 設定smarty的路徑
  require('smarty_connect.php');
  $smt=new smarty_connect;

	// 連接資料庫
    $link = mysqli_connect("localhost","root","") 
		or die('連結資料庫失敗');
	mysqli_select_db($link,'ordering_system')	
		or die('載入資料庫失敗');
	mysqli_query($link,'SET CHARACTER SET utf8');
	
	$smt->assign('title_window','系統訊息');  // title_window : 此網頁頁面名稱

	// 儲存使用者輸入變數
	$account = $_POST["account"];
	$password = $_POST["password"];
	
	$input_verification = TRUE;  // 用來記述驗證過程有無錯誤

	// (1) 判斷驗證碼是否正確
	if(!isset($_SESSION))
	{
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
	
	// 如果使用者輸入的驗證碼無錯誤，則進行登入
	if($input_verification == TRUE)
	{
		// 判斷使用者輸入的帳密是否存在
		// mysqli_real_escape_string --> 在特殊字元前都會加入\，防止SQL injection
		$sql = "select * from member where Account='".mysqli_real_escape_string($link,$account)."' limit 1";
		$result = mysqli_query($link,$sql);
		$num = mysqli_fetch_array($result);

		if(mysqli_num_rows($result)==1)
			if(password_verify($password,$num['Password']))  // 密碼解密
			{
				// 判斷帳號是否鎖定 
				if($num['Locked'] == 1)
				{
						$smt->assign('locked', TRUE);
				}
				else
				{
					//unset($_SESSION['check_word']);  // 釋放$_SESSION['check_word']
					//將帳號寫入session，方便驗證使用者身份
					$_SESSION['ID'] = $num['ID'];
					$_SESSION['Account'] = $num['Account'];
					$_SESSION['Name'] = $num['Name'];
					$_SESSION['Phone'] = $num['Phone'];
					$_SESSION['Email'] = $num['Email'];
					$_SESSION['Permission'] = $num['Permission'];

					$smt->assign('success', TRUE);
				}
			}
			else
			{
				$smt->assign('success', FALSE);
			}
	}
	$link->close();	

	$script['home']="main.php";
	$smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

	// 顯示結果，指定讀取樣版
	$smt->display('login_post.tpl');
?>