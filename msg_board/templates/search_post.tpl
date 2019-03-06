<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
</style>
<script type="text/javascript">
function keyword_marked(title,keyword)
{
    title = title.replace(keyword, '<font color="red">'+keyword+'</font>');
    document.getElementById("StringFont").innerHTML = title;
    document.write(title);
}
</script>
</head>
<body>

    {* (1) 判斷$search是否為空值 *}
    {if ! isset($search)}
        <script> swal({ title: "請輸入欲搜尋的關鍵字", icon: "warning" ,button: "確 定 " }).then(function() { history.go(-1); }); </script>
        {return}
    {/if}

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
    <div align= "left"  width="500" style="padding-left:510px;">
        <b>以下顯示搜尋 <font color="blue">{$case}</font> 與 " <font color="blue">{$search}</font> " 相關的結果 ...</b>
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

            {if $permission_user eq 2}
                <td bgcolor=#51A1B4 width="100" style="text-align: center;"><font color="white">編 輯</font></td>
            {/if}
        </tr>

        {foreach $article as $a}
        <tr>
            <td bgcolor=#ECF8DF width="100" style="text-align: center;"> {$a.BID + ($page - 1) * 10} </td>
            <td bgcolor=#ECF8DF width="550" style="text-align: left;"><a href="{$script.msg_board}? AID={$a.AID}"> {if $field eq 1} {$a.Title|replace:{$search}:"<font color =#ff2d2d>{$search}</font>"} {else} {$a.Title} {/if} </a></td>
            <td bgcolor=#ECF8DF width="150" style="text-align: center;"> {if $field eq 2} {$a.Nickname|replace:{$search}:"<font color =#ff2d2d>{$search}</font>"} {else} {$a.Nickname}  {/if} </td>
            <td bgcolor=#ECF8DF width="100" style="text-align: center;"> {$a.Date} </td>

            {if $permission_user eq 2}
                <td bgcolor=#ECF8DF width="100" style="text-align: center;"><a href="{$script.RUD_del}? AID={$a.AID}">刪 除</a></td>
            {/if}
        </tr>
        {/foreach}
    </table>
    </div>
    <br />
    <div class="page">
            {* 頁數顯示 *}
            共 {$data_nums} 筆 - 在第 {$page} 頁 - 共 {$pages} 頁
            {if $pages gt 1}
                <br /><a href="?page=1&search={$search}&field={$field}">首頁 </a>第 
                {for $i=1 to {$pages}}
                    {if {$page}-5 lt $i && $i lt {$page}+5}
                        <a href="?page={$i}&search={$search}&field={$field}">{$i}</a>
                    {/if}
                {/for}
                頁 <a href="?page={$pages}&search={$search}&field={$field}"> 末頁</a><br /><br />
            {/if}

        {* 頁底連結 *}
        <br><a href="{$script.board}">離開搜尋結果</a><br>
    </div>
</div>
</body>
</html>