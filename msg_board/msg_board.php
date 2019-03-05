<?php 
    // 隱藏Notice
    error_reporting(E_ALL^E_NOTICE); 

    // 設定smarty的路徑
    require('smarty_connect.php');
    $smt=new smarty_connect;

    // 接收使用者所選之文章AID
    $AID = htmlspecialchars($_GET["AID"],ENT_QUOTES);

    //判斷session是否已啟動
    if(!isset($_SESSION)){
		session_start();
    } 
    // 儲存當前所瀏覽的文章
    $_SESSION['Now_AID'] = $AID;
    $smt->assign('permission_now',$_SESSION['Permission']);  // permission_now : 當前使用者權限

    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
		or die('連結資料庫失敗');
	mysqli_select_db($link,'mydb')	
		or die('載入資料庫失敗');
    mysqli_query($link,'SET CHARACTER SET utf8');
    
    // 取出該AID之文章之資料
    $sql = "SELECT * FROM article WHERE AID = '$AID'"; // 表單內容排序
    $result = mysqli_query($link,$sql) or die("Error");
    $num = mysqli_fetch_array($result);

    ////////////////////////////// 提供當前瀏覽文章之資訊 /////////////////////////
    $content = str_replace('\r\n','<br>',$num['Content']);
    $smt->assign('title', $num['Title']);  // title : 此網頁頁面名稱
    $smt->assign('title_a', $num['Title']);  // title_a : 當前瀏覽文章的主題
    $smt->assign('nname_a', $num['Nickname']);  // nname_a : 當前瀏覽文章的發文者
    $smt->assign('content_a', $content);  // content_a : 當前瀏覽文章的內容
    $smt->assign('date', $num['Date']);  // content_a : 當前瀏覽文章的內容
    $smt->assign('permission', $num['Permission']);  // permission : 當前瀏覽文章的發文者權限

    if($num['ID_number'] == $_SESSION['ID_number'] && $num['Permission'] > 0) 
        $smt->assign('user_eq_author', TRUE);  // user_eq_author : 當前瀏覽文章者是否為該文章之作者
    else
        $smt->assign('user_eq_author', FALSE);  // user_eq_author : 當前瀏覽文章者是否為該文章之作者

    ////////////////////////////// 提供當前瀏覽文章之"回覆"資訊 /////////////////////////
    $sql = "SELECT * FROM reply WHERE AID = '$AID' ORDER BY Date ASC, RID ASC"; // 表單內容排序
    $result = mysqli_query($link,$sql) or die("Error");

    // 計算回覆頁數
    $data_nums = mysqli_num_rows($result); //統計總比數
    $per = 5; //每頁顯示項目數量
    $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }

    // 防止使用者在瀏覽器隨意輸入頁數，限定為正整數
    if($page < 1)
        $page=1;
        
    $smt->assign('data_nums',$data_nums);  // data_nums : 總文章筆數
    $smt->assign('page',$page);  // page : 當前頁數
    $smt->assign('pages',$pages);  // pages : 總頁數
    $smt->assign('AID_now', $AID);   // AID_now : 當前瀏覽文章之AID

    $start = ($page-1)*$per; //每一頁開始的資料序號
    $result = mysqli_query($link, $sql.' LIMIT '.$start.', '.$per) or die("Error2");

    while ($row = mysqli_fetch_array ($result))
    {
        $row['Nickname'] = mysqli_real_escape_string($link,$row['Nickname']);
        $row['Content'] = mysqli_real_escape_string($link,$row['Content']);
        $row['Date'] = mysqli_real_escape_string($link,$row['Date']);
        $id = mysqli_real_escape_string($link,$row['ID_number']);
        if($row['ID_number'] == $_SESSION['ID_number']) 
            $row['user_eq_author'] = TRUE;
        else
            $row['user_eq_author'] = FALSE;

        $sql_p = "SELECT Permission FROM member WHERE ID_number = '$id' LIMIT 1";
        $result_p = mysqli_query($link,$sql_p) or die("Error");
        $num_p = mysqli_fetch_array ($result_p);
        $row['Permission'] = $num_p['Permission'];
        $reply[] = $row;
    }

    $link->close();	

    $smt->assign('reply',$reply);  // article : 該頁數之對應文章
    $script['reply']="reply.php";
    $script['Rdr']="RUD_delete_reply.php";
    $script['board']="board.php";
    $script['update']="msg_update.php";
    $script['delete']="msg_delete.php";
    $script['update_r']="reply_update.php";
    $script['delete_r']="reply_delete.php";
    $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本
    
    // 顯示結果，指定讀取樣版
    $smt->display('msg_board.tpl');
?>