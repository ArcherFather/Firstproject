<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> {$title_window} </title>
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
    .information{
        position:relative;
        top:20px;
        left:40%;
    }
    .btn-normal{
        background-color:#117e96;
        border:2px #51A1B4 double;
        color: white;
        border-radius: 5px;
    }
    .btn-normal:hover  {* 滑鼠移入btn-normal的事件 *}
    {
        background-color:#51A1B4;
        color: #ECF8DF;
    }
</style>
</head>
<body>
<div class="board-page">
    <div class="information">

        {* 如果使用者為會員，顯示帳號資訊 *}
        <b><font color=#117e96>[ 帳號資訊 ]</font></b><br><br>

        {if isset($permission_now) }
            <b>帳號 : </b> {$id} <br><br>
            <b>姓名 : </b> {$name} <br><br>
            <b>暱稱 : </b> {$nname} <br><br>
            <b>性別 : </b> {if $gender eq "M"} 男 {elseif $gender eq "F"} 女 {/if} <br><br>
            <b>聯絡電話 : </b> {$phone} <br><br>
            <b>Email : </b> {$email} <br><br>
            <b>級別 : </b> {$status} <br><br>

            <p>
            <input type="button" class = "btn-normal" value="修改資料" onclick="location.href='{$script.update}'">&nbsp;&nbsp;
            <input type="button" class = "btn-normal" value="回主畫面" onclick="location.href='{$script.menu}'"><br><br>
            </p>
        {/if}
    </div>
</div>
</body>
</html>