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
        {* 如果使用者為會員，允許回覆 *}
        {if isset($permission_now) }
            回覆主題 : {$title} <br><br>

            回覆內容 : <font size = "1" color = "gray">(最多輸入100個字元)</font><br>
            <textarea type ="text" name="content"  style="width:300px; height:200px;" style="vertical-align:text-top;" maxlength="100"></textarea><br><br>
            
            請輸入下圖字樣：
            {* 重新產生驗證碼 *}
            <script>
            function refresh_code(){ 
                document.getElementById("imgcode").src="{$script.captcha}"; 
            } 
            </script>
            {* 輸入框 *}
            <input type="text" name="checkword" size="10" maxlength="4" autocomplete="off" />
            {* 驗證碼 *}
            <p><img id="imgcode" src="{$script.captcha}" onclick="refresh_code()" /><br />
            (點擊圖片可以更換驗證碼)</p>

            <input type="submit" value="送 出" style="width:300px; height:30px; background-color:#117e96; border:2px #51A1B4 double; color: white; border-radius: 5px">

        {else}  {* 如果使用者為訪客，要求登入 *}
            <script> swal({ title: "請先登入", text: "本留言板只允許會員回覆", icon: "warning", button: "確定 " }).then(function() { window.location = '{$script.login}'; }); </script>
        {/if}
    </div>
</div>
</form>
</html>