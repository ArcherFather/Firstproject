<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<title> {$title} </title>
</head>
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
    table{
        border-spacing:1 1;   <!-- 表格欄位水平間的距離 表格欄位垂直間的距離 -->
        font-weight:bold;
        table-layout:fixed; <!-- 使表格水平布局不受格內文字影響 -->
        word-break:break-all;  {* 設定文字段行規則 (normal代表亞洲與非亞洲語言都依文字規則斷行) *}
        word-wrap:break-word;  {* 是否允許瀏覽器在單詞內進行斷句) *}
    }
    td{
        font-size: 15px;
        font-weight:bold;
        overflow:hidden; <!-- 文本超出時隱藏 -->
        <!-- white-space:nowrap; 規定表格內容不換行 -->
        word-wrap:break-word;  {* 是否允許瀏覽器在單詞內進行斷句) *}
        word-break:break-all;  {* 設定文字段行規則 (normal代表亞洲與非亞洲語言都依文字規則斷行) *}
    }
    font{
        font-family:'微軟正黑體';
    }
</style>
<style type="text/css">
    .board-page{
        text-align:center;
        width:100%;
        height:100%;
    }
    .css-table{
        position:relative;
        top:20px;
        left:37%;
        overflow:auto;
        text-align:left;
        display: table;
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
    .btn-manager{
        background-color:#FFC0CB;
        border:2px #FF1493 double;
        color: blue;
        border-radius: 5px;
    }
    .btn-manager:hover  {* 滑鼠移入btn-manager的事件 *}
    {
        background-color:#FF1493;
        color: #FFC0CB;
    }
</style>
<body>
<div class="board-page">
    <div class="css-table">
        {* 文章列表 *}
        <table style="word-break:break-all; word-wrap:break-all;">
            <tr>
                <td bgcolor=#51A1B4 width="500" style="text-align: left;"><font color="white">主題 : </font>{$title_a} </td>
            </tr>
            <tr>
                <td bgcolor=#51A1B4 width="500" style="text-align: left;"><font color="white">留言者 : </font>{$nname_a} </td>
            </tr>
            <tr>
                {* nl2br --> 將換行符號轉為<br /> *}
                <td bgcolor=#ECF8DF width="500" height="400" style="vertical-align:text-top;"> {$content_a|nl2br} <p> <font size = "1" color = "gray"><發表時間 : {$date}></font></td>
            </tr>
            <tr>
                <td align= "right">
                    <input type="button" class = "btn-normal" value="我要回覆" onclick="location.href='{$script.reply}? Title={$title_a}'">
                {* 如果當前使用者為該文章作者 *}
                {if $user_eq_author}
                    <input type="button" class = "btn-normal" value="修改留言" onclick="location.href='{$script.update}? AID={$AID_now}'">
                    <input type="button" class = "btn-normal" value="刪除留言" onclick='
                        swal({
                            title: "確定要刪除此留言嗎?",
                            text: "一旦刪除，便無法再次回復!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                swal("刪除成功", {
                                icon: "success",
                                }).then(function() { window.location = "{$script.delete}? AID={$AID_now}" });
                            } else {
                                swal("已取消刪除");
                            }
                        });'>
                {/if}
                {if $permission_now eq 2 && $permission < 2}
                    <input type="button" class = "btn-manager" value="刪除留言" onclick='
                        swal({
                            title: "確定要刪除此留言嗎?",
                            text: "一旦刪除，便無法再次回復!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                swal("刪除成功", {
                                icon: "success",
                                }).then(function() { window.location = "{$script.delete}? AID={$AID_now}" });
                            } else {
                                swal("已取消刪除");
                            }
                        });'>
                {/if}
                </td>
            </tr>
        </table>
    </div>
    <p>
    {* 回覆列表 *}
    <div class="css-table">
        回覆區 :
        <table>
            {foreach $reply as $r}
            <tr>
                {if $r.Permission eq 2}
                    <td bgcolor=#FF1493 width="100" style="text-align: center;"> {$r.Nickname} </td>
                    {* replace --> 將換行符號轉為' '(空白) *}
                    <td bgcolor=#FFC0CB width="400" style="text-align: left;"> {$r.Content|replace: array('\r','\n','\r\n','\n\r') : ' '} <font size = "1" color = "gray"><{$r.Date}></font></td>
                {else}
                    <td bgcolor=#51A1B4 width="100" style="text-align: center;"> {$r.Nickname} </td>
                    <td bgcolor=#ECF8DF width="400" style="text-align: left;"> {$r.Content|replace: array('\r','\n','\r\n','\n\r') : ' '} <font size = "1" color = "gray"><{$r.Date}></font></td>
                {/if}
                {* 如果當前使用者為該回覆作者 *}
                {if $r.user_eq_author}
                <td>
                    <input type="button" class = "btn-normal" value="修改" onclick="location.href='{$script.update_r}? RID={$r.RID}'">
                    <input type="button" class = "btn-normal" value="刪除" onclick='
                        swal({
                            title: "確定要刪除此回覆嗎?",
                            text: "一旦刪除，便無法再次回復!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                swal("刪除成功", {
                                icon: "success",
                                }).then(function() { window.location = "{$script.delete_r}? RID={$r.RID} & AID={$r.AID}" });
                            } else {
                                swal("已取消刪除");
                            }
                        });'>
                </td>
                {/if}
                {if $permission_now eq 2 && $r.Permission < 2}
                <td>
                    <input type="button" class = "btn-manager" value="刪除" onclick='
                        swal({
                            title: "確定要刪除此回覆嗎?",
                            text: "一旦刪除，便無法再次回復!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                swal("刪除成功", {
                                icon: "success",
                                }).then(function() { window.location = "{$script.Rdr}? RID={$r.RID} & AID={$r.AID}" });
                            } else {
                                swal("已取消刪除");
                            }
                        });'>
                </td>
                {/if}
            </tr>
            {/foreach}
        </table>
    </div>
<br /><br />

{* 頁數顯示 *}
共 {$data_nums} 筆 - 在第 {$page} 頁 - 共 {$pages} 頁
{if $pages gt 1}
    <br /><a href="? page=1 & AID={$AID_now}"> 首頁 </a>第 
    {for $i=1 to {$pages}}
        {if {$page}-3 lt $i && $i lt {$page}+3}
            <a href="? page={$i} & AID={$AID_now}">{$i}</a>
        {/if}
    {/for}
    頁 <a href="? page={$pages} & AID={$AID_now}"> 末頁</a>
{/if}
<br /><br />

{* 頁底連結 *}
<br><a href="{$script.board}">回留言板</a><br>

</div>
</body>
</html>