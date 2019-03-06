<?php 
    // 隱藏Notice
    error_reporting(E_ALL^E_NOTICE); 

    //判斷session是否已啟動
    if(!isset($_SESSION)){
        session_start();
    }

    // 如果當前使用者不為管理者，無法進入此頁面 (防止改網址)
    if($_SESSION['Permission'] == 2)
    {
        // 設定smarty的路徑
    	require('smarty_connect.php');
    	$smt=new smarty_connect;

        $smt->assign('title','會員管理');  // title : 此網頁頁面名稱
        
        // 連接資料庫
        $link = mysqli_connect('127.0.0.1','archer','archer258') 
            or die('連結資料庫失敗');
        mysqli_select_db($link,'mydb')	
            or die('載入資料庫失敗');
        mysqli_query($link,'SET CHARACTER SET utf8');
        $sql = "SELECT * FROM member WHERE Permission = 1 ORDER BY ID_number ASC"; // 會員表單內容排序
        $result = mysqli_query($link,$sql) or die("Error");

        $data_nums = mysqli_num_rows($result); //統計總比數
        $per = 10; //每頁顯示項目數量
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


        $start = ($page-1)*$per; //每一頁開始的資料序號
        $result = mysqli_query($link, $sql.' LIMIT '.$start.', '.$per) or die("Error2");

        // 提供表格內容
        $BID = 1;  // 紀錄目前排序的資料編號

        while ($row = mysqli_fetch_array ($result))
        {
            $row['ID_number']=mysqli_real_escape_string($link,$row['ID_number']);
            $row['ID_number']=htmlspecialchars($row['ID_number'],ENT_QUOTES);
            $row['Name']=htmlspecialchars($row['Name']);
            $row['Nickname']=htmlspecialchars($row['Nickname']);
            $row['Gender'] = htmlspecialchars($row['Gender']);
            $row['Phone_number'] = htmlspecialchars($row['Phone_number']);
            $row['Email'] = htmlspecialchars($row['Email']);
            $row['Locked'] = htmlspecialchars($row['Locked']);
            if($row['Locked'] == 1)
               $row['status'] = "已鎖定";  // status : 該帳號之狀態
            else
                $row['status'] = "活躍中";  // status : 該帳號之狀態

            $row['BID'] = $BID;
            $member[] = $row;
            $BID++;
        }

        $smt->assign('member',$member);  // article : 該頁數之對應文章
        $script['CRUD_u']="CRUD_update.php";
        $script['CRUD_d']="CRUD_delete.php";
        $script['CRUD_l']="CRUD_lock.php";
        $script['menu']="menu.php";
        $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

        // 顯示結果，指定讀取樣版
        $smt->display('CRUD.tpl');
    }
    else
        exit;
?>