<?php 
	// 隱藏Notice
	error_reporting(E_ALL^E_NOTICE); 

    // 設定smarty的路徑
    require('smarty_connect.php');
    $smt=new smarty_connect;

    //判斷session是否已啟動
	if(!isset($_SESSION)){
		session_start();
    }

    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
        or die('連結資料庫失敗');
    mysqli_select_db($link,'mydb')	
        or die('載入資料庫失敗');
    mysqli_query($link,'SET CHARACTER SET utf8');

    ////////////////////////////// 上方帳號資訊列 ////////////////////////////////////
    $smt->assign('permission_user', $_SESSION['Permission']);  // permission_now : 當前使用者全限
    $smt->assign('nname_user', $_SESSION['Nickname']);   // nname_now : 當前使用者暱稱
    $script['regist']="register.php";
    $script['login']="login.php";
    $script['logout']="logout.php";
    $script['CRUD']="CRUD.php";
    $script['RUD_del']="RUD_delete.php";

    // 儲存使用者輸入變數
    // htmlspecialchars --> 能防止XSS攻擊
    $search = htmlspecialchars($_GET["search"]);
    $search=mysqli_real_escape_string($link,$search);
    $field = intval($_GET["field"]);
    $smt->assign('title_window','搜尋 : '.$search.'的結果');  // title_window : 此網頁頁面名稱
    $smt->assign('search', $search);
    $smt->assign('field', $field);

	$input_verification = TRUE;  // 用來記述驗證過程有無錯誤

	////// 判斷輸入是否符合條件
	// (1) 判斷是否為空值
	if(strlen($search) == 0) // Content
	{
		$smt->assign('search', null);
		$input_verification = FALSE;
	}
	
	// 如果使用者的輸入資料皆無錯誤，則儲存回覆
	if($input_verification == TRUE)
	{
        ////////////////////////////// 文章列表 ////////////////////////////////////
        /////// 搜尋文章
        // 連接資料庫
        $link = mysqli_connect("localhost","root","") 
            or die('連結資料庫失敗');
        mysqli_select_db($link,'mydb')	
            or die('載入資料庫失敗');
        mysqli_query($link,'SET CHARACTER SET utf8');
        if($field == 1)
        {
            $sql = "SELECT * FROM article WHERE title LIKE '%$search%' ORDER BY Date DESC, AID DESC"; // 表單內容排序
            $smt->assign('case','標題');  // article : 該頁數之對應文章
        }
        else if($field == 2)
        {
            $sql = "SELECT * FROM article WHERE Nickname LIKE '%$search%' ORDER BY Date DESC, AID DESC"; // 表單內容排序
            $smt->assign('case','留言者');  // article : 該頁數之對應文章
        }
        else
            exit;
        $result = mysqli_query($link,$sql) or die("Error0");

        // 計算頁數
        $data_nums = mysqli_num_rows($result); //統計總比數
        $per = 10; //每頁顯示項目數量
        $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
        if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
            $page=1; //則在此設定起始頁數
        } else {
            $page = intval($_GET["page"]); //確認頁數只能夠是數值資料 (亂碼為0)
        }

        // 防止使用者在瀏覽器隨意輸入頁數，限定為正整數
        if($page < 1)
            $page=1;
        
        $smt->assign('data_nums',$data_nums);  // data_nums : 總文章筆數
        $smt->assign('page',$page);  // page : 當前頁數
        $smt->assign('pages',$pages);  // pages : 總頁數

        $start = ($page-1)*$per; //每一頁開始的資料序號
        $result = mysqli_query($link, $sql.' LIMIT '.$start.', '.$per) or die("Error2");

        // 顯示表格內容
        $BID = 1;  // 紀錄目前排序的資料編號

        while ($row = mysqli_fetch_array ($result))
        {
            $row['Title']=mysqli_real_escape_string($link,$row['Title']);
            $row['Nickname']=mysqli_real_escape_string($link,$row['Nickname']);
            $row['BID'] = $BID;
            $article[] = $row;
            $BID++;
        }
	}

    $link->close();	

    $smt->assign('article',$article);  // article : 該頁數之對應文章
    $script['msg_board']="msg_board.php";
    $script['leave_msg']="leave_message.php";
    $script['account']="account_information.php";
    $script['board']="board.php";
    $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

    // 顯示結果，指定讀取樣版
    $smt->display('search_post.tpl');
?>