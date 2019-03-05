<?php 
    // 設定smarty的路徑
    require('smarty_connect.php');
    $smt=new smarty_connect;

    // 隱藏Notice
    error_reporting(E_ALL^E_NOTICE); 

    //// 判斷是否登入，顯示不同權限
    //判斷session是否已啟動
	if(!isset($_SESSION)){
		session_start();
    }

    ////////////////////////////// 上方帳號資訊列 ////////////////////////////////////
    $smt->assign('permission_user', $_SESSION['Permission']);  // permission_now : 當前使用者全限
    $smt->assign('name_user', $_SESSION['Name']);   // nname_now : 當前使用者暱稱

    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
        or die('連結資料庫失敗');
    mysqli_select_db($link,'ordering_system')	
        or die('載入資料庫失敗');
    mysqli_query($link,'SET CHARACTER SET utf8');

    ////////////////////////////// 搜尋列表 ////////////////////////////////////
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
        if($field == 1)
        {
            $sql = "SELECT * FROM product WHERE Name LIKE '%$search%' ORDER BY PID ASC"; // 表單內容排序
            $smt->assign('case','商品名稱');  // article : 該頁數之對應文章
        }
        else if($field == 2)
        {
            $sql = "SELECT * FROM product WHERE PID LIKE '$search' ORDER BY PID ASC"; // 表單內容排序
            $smt->assign('case','商品編號');  // article : 該頁數之對應文章
        }
        else if($field == 3)
        {
            $sql = "SELECT * FROM product WHERE Brand LIKE '%$search%' ORDER BY PID ASC"; // 表單內容排序
            $smt->assign('case','品牌');  // article : 該頁數之對應文章
        }
        else
            exit;

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
            $row['Name']=mysqli_real_escape_string($link,$row['Name']);
            $row['Image']=mysqli_real_escape_string($link,$row['Image']);
            $row['Price']=mysqli_real_escape_string($link,$row['Price']);
            $row['BID'] = $BID;
            $product[] = $row;
            $BID++;
        }
	}

    $link->close();	

    $smt->assign('product',$product);  // product : 所有商品
    $script['login']="login.php";
    $script['logout']="logout.php";
    $script['home']="main.php";
    $script['detail']="product-details.php";
    $script['cart']="cart.php";
    $script['search_post']="search_post.php";
    $smt->assign('script', $script);   // script : 儲存所有本頁面需連接的腳本

    // 顯示結果，指定讀取樣版
    $smt->display('search_post.tpl');
?>