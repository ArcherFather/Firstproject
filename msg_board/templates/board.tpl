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
    }
    table{
        border-spacing:0;   <!-- 表格欄位水平間的距離 表格欄位垂直間的距離 -->
        font-weight:bold;
        table-layout:fixed; <!-- 使表格水平布局不受格內文字影響 -->
    }
    td{
        font-size: 15px;
        font-weight:bold;
        overflow:hidden; <!-- 文本超出時隱藏 -->
        white-space:nowrap; <!-- 規定表格內容不換行 -->
    
        margin: 0;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        padding: 0;
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }
    font{
        font-family:'微軟正黑體';
    }
    body {
        font-family: 微軟正黑體;
    }
</style>
<style type="text/css">
    .board-page{
        {* 固定長寬高，防止縮小變形 *}
        width:1920px;
        height:1080px;
        MARGIN-RIGHT: auto;
        MARGIN-LEFT: auto;
    }
    .css-table{
        display: table;
        style="background-color:#FFAFFE;
        width:100%;
        height:20px;
        margin:0 auto;  <!-- 外距 (與外邊界的距離) -->
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
    .page{
        text-align:center;
    }
    .btn-bar{
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
    #DIV-search{
        display:block;
        text-align:center;
    }
    #DIV-lm{
        display:block;
        text-align:right;
        padding-right: 510px;
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
    <br />
    {* 頁中:文章搜索 & 留言按鈕 *}
    <div style="text-align:center" width="500" style="padding-right:510px;">
        {* 頁中:文章搜索 *}
        <div id="DIV-search">
            <form action="{$script.post}" method="get">
            <select name="field" style="background-color:#117e96; color: white; border-radius: 5px; border:2px #51A1B4 double;">
                　<option value="1">標題</option>
                　<option value="2">留言者</option>
            </select>
            <input type="varchar" name="search" placeholder="在此搜尋文章..." size="30" maxlength="20" style="background-color:#ECF8DF; border-radius: 5px;">
            <input type="submit" class = "btn-bar" value="搜尋">
            </form>
        </div>
        {* 頁中:留言按鈕 *}
        <div id="DIV-lm">
            <input type="button" class = "btn-bar" value="我要留言" onclick="location.href='{$script.leave_msg}'" style="width:100px; height:40px; font-size : 18px; border-radius: 10px; border:3px #51A1B4 double;">
        </div>
    </div>

    <p>
    {* 文章列表 *}
    <div class="css-table">
    <table>
        <tr align= "right">
        </tr>
        <tr>
            <td bgcolor=#51A1B4 width="100" style="text-align: center;"><font color="white">編 號</font></td>
            <td bgcolor=#51A1B4 width="550" style="text-align: center;"><font color="white">文 章 主 題</font></td>
            <td bgcolor=#51A1B4 width="150" style="text-align: center;"><font color="white">留 言 者</font></td>
            <td bgcolor=#51A1B4 width="100" style="text-align: center;"><font color="white">發 文 日 期</font></td>
        </tr>

        {foreach $article as $a}
        <tr>
            <td bgcolor=#ECF8DF width="100" style="text-align: center;"> {$a.BID + ($page - 1) * 10} </td>
            <td bgcolor=#ECF8DF width="550" style="text-align: left;"><a href="{$script.msg_board}? AID={$a.AID}"> {$a.Title} </a></td>
            <td bgcolor=#ECF8DF width="150" style="text-align: center;"> {$a.Nickname} </td>
            <td bgcolor=#ECF8DF width="100" style="text-align: center;"> {$a.Date} </td>
        </tr>
        {/foreach}
    </table>


    </div>
    <br />
    <div class="page">
            {* 頁數顯示 *}
            共 {$data_nums} 筆 - 在第 {$page} 頁 - 共 {$pages} 頁
            {if $pages gt 1}
                <br /><a href=?page=1>首頁 </a>第 
                {for $i=1 to {$pages}}
                    {if {$page}-5 lt $i && $i lt {$page}+5}
                            <a href=?page={$i}>{$i}</a>
                    {/if}
                {/for}
                頁 <a href=?page={$pages}> 末頁</a><br /><br />
            {/if}

        {* 頁底連結 *}
        <br><a href="{$script.menu}">回主畫面</a><br>
    </div>
</div>
</body>
</html>