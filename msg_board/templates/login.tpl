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
<form action="{$script.post}" method="post">
<div class="board-page">
    <div class="input-area">
        <b><font color=#117e96>- 登入帳號 -</font></b><br><br>

        帳號 :
        <input type ="varchar" name="id" size="20" maxlength="25"> <br><br>
        密碼 :
        <input type ="password" name="pd" size="20" maxlength="25"><br><br>

        請輸入下圖字樣：
        <!-- 重新產生驗證碼 -->
        <script>
        function refresh_code(){ 
            document.getElementById("imgcode").src="{$script.captcha}"; 
        } 
        </script>
        <!-- 輸入框 -->
        <input type="text" name="checkword" size="7" maxlength="4" autocomplete="off" />
        <!-- 驗證碼 -->
        <p><img id="imgcode" src="captcha.php" onclick="refresh_code()" /><br />
        (點擊圖片可以更換驗證碼)</p>

        <input type="submit" value="登入" style="width:220px; height:30px; background-color:#117e96; border:2px #51A1B4 double; color: white; border-radius: 5px">
    </div>
</div>
</form>
</html>