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
    le { margin-left:0.7em;}
</style>
</head>
<form action="{$script.post}" method="post">
<div class="board-page">
    <div class="input-area">
        <b>- 發表留言 -</b><br><br>
        (有<font color="red"> * </font>欄位為必填)<br><br>

        {* 如果使用者為會員，自動帶出資料 *}
        {if isset($permission_now) }
            <font color="red">* </font>請輸入暱稱 : 
            <input type ="varchar" name="nickname" maxlength="20" value= "{$nname}" readonly><br><br>
            <le>請輸入性別 :</le>
            <input type ="radio" name="gender" value="M" {if $gender eq "M"} checked {else} disabled {/if}>男
            <input type ="radio" name="gender" value="F" {if $gender eq "F"} checked {else} disabled {/if}>女
            <br><br>
            <font color="red">* </font>請輸入聯絡電話 : 
            <input type ="varchar" name="phone" maxlength="11" value="{$phone}" readonly><br><br>
            <font color="red">* </font>請輸入Email :
            <input type ="text" name="email" maxlength="50" value="{$email}" readonly><br><br>
        {else}  {* 如果使用者為訪客，需手動填寫 *}
            <font color="red">* </font>請輸入暱稱 :
            <input type ="varchar" name="nickname" maxlength="20">
            <font size = "1" color = "gray">(最多輸入20個字元)</font>
            <br><br>
            <le>請輸入性別 :</le>
            <input type ="radio" name="gender" value="M">男
            <input type ="radio" name="gender" value="F">女
            <br><br>
            <font color="red">* </font>請輸入聯絡電話 :
            <input type ="varchar" name="phone" maxlength="11"><br><br>
            <font color="red">* </font>請輸入Email :
            <input type ="text" name="email" maxlength="50"><br><br>
        {/if}

        <font color="red">* </font>主題 : <font size = "1" color = "gray">(最多輸入50個字元)</font><br>
        <input type ="text" name="title" style="width:300px;" maxlength="50"><br><br>

        <font color="red">* </font>內容 : <font size = "1" color = "gray">(最多輸入5000個字元)</font><br>
        <textarea type ="text" name="content"  style="width:300px; height:200px;" style="vertical-align:text-top;" maxlength="5000"></textarea><br><br>

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
    </div>
</div>
</form>
</html>