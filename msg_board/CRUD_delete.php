<?php
    $id = $_GET['ID_number'];

    // 連接資料庫
    $link = mysqli_connect("localhost","root","") 
    or die('連結資料庫失敗');
    mysqli_select_db($link,'mydb')	
    or die('載入資料庫失敗');
    mysqli_query($link,'SET CHARACTER SET utf8');
    $sql = "DELETE FROM member WHERE ID_number = '$id'";
    mysqli_query($link,$sql) or die("Error 1");

    $link->close();

    header("Location: CRUD.php");  // 跳回至CRUD.php
?>