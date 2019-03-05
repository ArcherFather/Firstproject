<?php
    $id = $_GET['ID_number'];

    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
    or die('連結資料庫失敗');
    mysqli_select_db($link,'mydb')	
    or die('載入資料庫失敗');
    mysqli_query($link,'SET CHARACTER SET utf8');

    $id = mysqli_real_escape_string($link,$id);  // 防止sql語法
    $sql = "SELECT Locked FROM member WHERE ID_number='$id' LIMIT 1";
    $result = mysqli_query($link,$sql) or die("Error");
    $num = mysqli_fetch_array($result);

    if($num['Locked'] == 0)
    {
        $sql = "UPDATE member SET Locked = 1 WHERE ID_number = '$id'";
        mysqli_query($link,$sql) or die("Error 1");
    }
    else if($num['Locked'] == 1)
    {
        $sql = "UPDATE member SET Locked = 0 WHERE ID_number = '$id'";
        mysqli_query($link,$sql) or die("Error 2");
    }

    $link->close();

    header("Location:".getenv("HTTP_REFERER"));  // 跳回至上一頁(調用介面)
?>