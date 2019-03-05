<?php
    // 設定smarty的路徑
    require('smarty_connect.php');
    $smt=new smarty_connect;

    // 隱藏Notice
    error_reporting(E_ALL^E_NOTICE); 

    $smt->assign('title','留言板');  // title : 此網頁頁面名稱

    //// 判斷是否登入，顯示不同權限
    //判斷session是否已啟動
	if(!isset($_SESSION)){
		session_start();
    }

    ////////////////////////////// 上方帳號資訊列 ////////////////////////////////////
    $smt->assign('permission_user', $_SESSION['Permission']);  // permission_now : 當前使用者全限
    $smt->assign('nname_user', $_SESSION['Nickname']);   // nname_now : 當前使用者暱稱
    $script['regist']="register.php";
    $script['login']="login.php";
    $script['logout']="logout.php";
    $script['CRUD']="CRUD.php";
    $script['RUD_del']="RUD_delete.php";
    $smt->assign('title','留言板');  // title : 此網頁頁面名稱

    ////////////////////////////// 文章列表 ////////////////////////////////////
    /////// 搜尋文章
    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
		or die('連結資料庫失敗');
	mysqli_select_db($link,'mydb')	
		or die('載入資料庫失敗');
	mysqli_query($link,'SET CHARACTER SET utf8');
    $sql = "SELECT * FROM article ORDER BY Date DESC, AID DESC"; // 表單內容排序
    $result = mysqli_query($link,$sql) or die("Error");

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

    $smt->assign('article',$article);  // article : 該頁數之對應文章
    $script['msg_board']="msg_board.php";
    $script['leave_msg']="leave_message.php";
    $script['account']="account_information.php";
    $script['menu']="menu.php";
    $script['post']="search_post.php";
    $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

    // 顯示結果，指定讀取樣版
    $smt->display('board.tpl');
?>