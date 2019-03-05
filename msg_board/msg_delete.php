<?php
    $AID = $_GET['AID'];

    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
    or die('連結資料庫失敗');
    mysqli_select_db($link,'mydb')	
    or die('載入資料庫失敗');
    mysqli_query($link,'SET CHARACTER SET utf8');

    // 刪除該文章及其留言
    $sql = "DELETE FROM reply WHERE AID = '$AID'";
    mysqli_query($link,$sql) or die("Error");
    $sql = "DELETE FROM article WHERE AID = '$AID'";
    mysqli_query($link,$sql) or die("Error 1");

    $link->close();

    header("Location: board.php");  // 跳回至CRUD.php
?>