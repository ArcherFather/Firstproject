<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> {$title} </title>
<style>
    body{
        background: url(https://i2.bahamut.com.tw/html_bg.gif) center top #F9F9F9;
        background-image: url(https://i2.bahamut.com.tw/html_bg.gif);
        background-position-x: center;
        background-position-y: top;
        background-size: initial;
        background-repeat-x: initial;
        background-repeat-y: initial;
        background-attachment: initial;
        background-origin: initial;
        background-clip: initial;
        background-color: rgb(249, 249, 249);
        font-family: 微軟正黑體;
    }
</style>
<style type="text/css">
    .board-page{
        width:100%;
        height:100%;
    }
    .input-area{
        position:relative;
        top:20px;
        left:40%;
    }
</style>
</head>
<form action="{$script.post}" method="post">
<div class="board-page">
    <div class="input-area">
        <b>- 會員資訊 -</b><br><br>

        帳號 : {$id} <input type ="hidden" name="id" value = "{$id}")> <br><br>
        姓名 : <input type ="varchar" name="name" maxlength="20" value = "{$name}")><br><br>
        暱稱 : <input type ="varchar" name="nickname" maxlength="20" value = "{$nname}")><br><br>
        性別 :
        <input type ="radio" name="gender" value="M" {if $gender eq "M"} checked {/if} >男
        <input type ="radio" name="gender" value="F" {if $gender eq "F"} checked {/if} >女
        <br><br>
        電話號碼 :  <input type ="varchar" name="phone" value = "{$phone}"><br><br>
        Email : <input type ="text" name="email" value = "{$email}"><br><br>

        <input type ="submit" value="確定修改"><br><br>

        <a href="{$script.CRUD}"> - 返回會員管理介面 - </a><br>
    </div>
</div>
</form>
</html>