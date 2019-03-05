<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<title>{$title}</title>
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
        border-spacing:0;   <!-- 表格欄位水平間的距離 表格欄位垂直間的距離 -->
        font-weight:bold;
        table-layout:fixed; <!-- 使表格水平布局不受格內文字影響 -->
    }
    td{
        font-size: 15px;
        font-weight:bold;
        overflow:hidden; <!-- 文本超出時隱藏 -->
        white-space:nowrap; <!-- 規定表格內容不換行 -->
    }
</style>
<style type="text/css">
    .board-page{
        text-align:center;
        <!-- background-color:#FFAC55; -->
        width:100%;
        height:100%;
    }
    .css-table{
        display: table;
        style="background-color:#FFAFFE;
        width:100%;
        height:20px;
        margin:0 auto;  <!-- 外距 (與外邊界的距離) -->
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
    .btn-unlock{
        background-color:#FF1493;
        border:2px #FFC0CB double;
        color: white;
        border-radius: 5px;
    }
    .btn-unlock:hover  {* 滑鼠移入btn-manager的事件 *}
    {
        background-color:#FFC0CB;
        color: #FF1493;
    }
</style>
<body>
<div class="board-page">

    <b><font color=#117e96>[ 會員管理 ]</font></b><br><br>

    {* 文章列表 *}
    <div class="css-table">
        <table>
        <tr>
            <td bgcolor=#51A1B4 width="40" style="text-align: center;"><font color="white">編號</font></td>
            <td bgcolor=#51A1B4 width="200" style="text-align: center;"><font color="white">帳號</font></td>
            <td bgcolor=#51A1B4 width="150" style="text-align: center;"><font color="white">姓名</font></td>
            <td bgcolor=#51A1B4 width="150" style="text-align: center;"><font color="white">暱稱</font></td>
            <td bgcolor=#51A1B4 width="50" style="text-align: center;"><font color="white">性別</font></td>
            <td bgcolor=#51A1B4 width="150" style="text-align: center;"><font color="white">電話號碼</font></td>
            <td bgcolor=#51A1B4 width="300" style="text-align: center;"><font color="white">Email</font></td>
            <td bgcolor=#51A1B4 width="80" style="text-align: center;"><font color="white">狀態</font></td>
            <td bgcolor=#117e96 width="150" style="text-align: center;"><font color="white">編輯</font></td>
        </tr>

            {foreach $member as $m}
            <tr>
                <td bgcolor=#51A1B4 width="20" style="text-align: center;"><font color="white">{$m.BID + ($page - 1) * 10}</font></td>
                <td bgcolor=#ECF8DF width="200" style="text-align: center;"> {$m.ID_number} </a></td>
                <td bgcolor=#ECF8DF width="150" style="text-align: center;">{$m.Name}</td>
                <td bgcolor=#ECF8DF width="150" style="text-align: center;">{$m.Nickname}</td>
                <td bgcolor=#ECF8DF width="50" style="text-align: center;">{$m.Gender}</td>
                <td bgcolor=#ECF8DF width="150" style="text-align: center;">{$m.Phone_number}</td>
                <td bgcolor=#ECF8DF width="300" style="text-align: center;">{$m.Email}</td>
                <td bgcolor=#ECF8DF width="80" style="text-align: center;">{$m.status}</td>
                <td bgcolor=#ECF8DF width="150" style="text-align: center;">
                    <input type="button" class = "btn-normal" value="修改" onclick="location.href='{$script.CRUD_u}? ID_number={$m.ID_number}'">

                    {if $m.Locked eq 0}
                        <input type="button" class = "btn-normal" value="鎖定" onclick="location.href='{$script.CRUD_l}? ID_number={$m.ID_number}'">
                    {else if $m.Locked eq 1}
                        <input type="button" class = "btn-unlock" value="解鎖" onclick="location.href='{$script.CRUD_l}? ID_number={$m.ID_number}'">
                    {/if}

                    <input type="button" class = "btn-normal" value="刪除" onclick='
                        swal({
                            title: "確定要刪除 {$m.ID_number} 的會員資料嗎?",
                            text: "一旦刪除，便無法再次回復!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                swal("成功刪除該會員資料", {
                                icon: "success",
                                }).then(function() { window.location = "{$script.CRUD_d}? ID_number={$m.ID_number}" });
                            } else {
                                swal("已取消刪除");
                            }
                        });'>
                </td>
            </tr>
            {/foreach}
        </table>
    </div>
    <br />

    {* 頁數顯示 *}
    共 {$data_nums} 筆 - 在第 {$page} 頁 - 共 {$pages} 頁
    <br /><a href=?page=1>首頁</a>第 
    {for $i=1 to {$pages}}
        {if {$page}-5 lt $i && $i lt {$page}+5}
                <a href=?page={$i}>{$i}</a>
        {/if}
    {/for}
    頁 <a href=?page={$pages}> 末頁</a><br /><br />


    {* 頁底連結 *}
    <br><a href="{$script.menu}">回主畫面</a><br>

</div>
</body>
</html>