<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>{$title}</title>
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
        width:1920px;
        height:1080px;
        MARGIN-RIGHT: auto;
        MARGIN-LEFT: auto;
    }
    .member-information{
        margin: 0px;
        border-bottom: 3px #cdcdcd solid;
        background-color: #117e96;
        height:40px;
        align : right;
    }
    .bar-objects{
        padding-top: 8px;
        padding-right: 450px;
        text-align:right;
    }
    .btn-bar{
        onmouseover ="this.style.backgroundColor='Yellow'";
        background-color:#117e96;
        border:2px #51A1B4 double;
        color: white;
        border-radius: 5px;
        font-family: 微軟正黑體;
    }
    .btn-bar:hover  {* 滑鼠移入btn-bar的事件 *}
    {
        background-color:#51A1B4;
        color: #ECF8DF;
    }
</style>
</head>
<body>
<div class="board-page">
    <div class="member-information">
        <div class="bar-objects">
            {* 頁首:帳號資訊 *}
            {* 判斷使用者是否登入，並應對 *}
            {* check for null. *}
            {if ! isset($permission_user) }
                <input type="button" class = "btn-bar" value="註冊帳號" onclick="location.href='{$script.regist}'">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" class = "btn-bar" value="帳號登入" onclick="location.href='{$script.login}'">
            {else}
                <font color="white">Hello! {$nname_user} </font> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" class = "btn-bar" value="帳號資訊" onclick="location.href='{$script.account}'">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" class = "btn-bar" value="登出" onclick="location.href='{$script.logout}'">
            
                {if $permission_user eq 2}
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" class = "btn-bar" value="會員管理" onclick="location.href='{$script.CRUD}'">
                {/if}
            {/if}
        </div>
    </div>
<br><br>

<div align = "center">
    <!--<a href="board.php"><img  width="400px" height="300px" src="https://www.twcsi.org.tw/UserFiles/image/20160428004.png"></a><br>-->   
    <a href="{$script.board}">進入留言板</a>
</div>
</div>
</body>
</html>