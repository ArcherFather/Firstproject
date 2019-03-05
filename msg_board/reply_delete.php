<?php
    $RID = $_GET['RID'];
    $AID = $_GET['AID'];

    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
    or die('連結資料庫失敗');
    mysqli_select_db($link,'mydb')	
    or die('載入資料庫失敗');
    mysqli_query($link,'SET CHARACTER SET utf8');

    // 刪除該文章及其留言
    $sql = "DELETE FROM reply WHERE RID = '$RID'";
    mysqli_query($link,$sql) or die("Error");

    $link->close();

    header("Location:msg_board.php?AID=$AID");  // 返回其調用介面
?>