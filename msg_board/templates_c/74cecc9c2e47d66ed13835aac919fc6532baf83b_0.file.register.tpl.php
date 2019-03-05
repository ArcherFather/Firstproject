<?php
/* Smarty version 3.1.33, created on 2019-02-26 02:41:07
  from 'C:\xampp\htdocs\smarty\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7499337bc716_75609065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74cecc9c2e47d66ed13835aac919fc6532baf83b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\register.tpl',
      1 => 1551145264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7499337bc716_75609065 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
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
<form action="<?php echo $_smarty_tpl->tpl_vars['script']->value['post'];?>
" method="post">
<div class="board-page">
    <div class="input-area">
            <b><font color=#117e96>- 註冊帳號 -</font></b><br><br>

        請輸入帳號 :         <input type ="varchar" name="id" size="20" maxlength="25"> 
        <font size = "1" color = "gray">(最多輸入25個字元)</font>
        <br><br>
        請輸入密碼 :
        <input type ="password" name="pd" size="20" maxlength="20">
        <font size = "1" color = "gray">(須為由數字與字母組成的6~20個字元)</font>
        <br><br>
        請輸入姓名 :
        <input type ="varchar" name="name" maxlength="20">
        <font size = "1" color = "gray">(最多輸入20個字元)</font>
        <br><br>
        請輸入暱稱 :
        <input type ="varchar" name="nickname" maxlength="20">
        <font size = "1" color = "gray">(最多輸入20個字元)</font>
        <br><br>
        請輸入性別 :
        <input type ="radio" name="gender" value="M" checked>男
        <input type ="radio" name="gender" value="F">女
        <br><br>
        請輸入電話號碼 :
        <input type ="int" name="phone" size = "16" maxlength="11"><br><br>
        請輸入Email :
        <input type ="text" name="email" size = "19" maxlength="50"><br><br>

        請輸入下圖字樣：
        <!-- 重新產生驗證碼 -->
        <?php echo '<script'; ?>
>
        function refresh_code(){ 
            document.getElementById("imgcode").src="<?php echo $_smarty_tpl->tpl_vars['script']->value['captcha'];?>
"; 
        } 
        <?php echo '</script'; ?>
>
        <!-- 輸入框 -->
        <input type="text" name="checkword" size="10" maxlength="4" autocomplete="off" />
        <!-- 驗證碼 -->
        <p><img id="imgcode" src="<?php echo $_smarty_tpl->tpl_vars['script']->value['captcha'];?>
" onclick="refresh_code()" /><br />
        (點擊圖片可以更換驗證碼)</p>

        <input type="submit" value="送出" style="width:270px; height:30px; background-color:#117e96; border:2px #51A1B4 double; color: white; border-radius: 5px">
    </div>
</div>	
</form>
</html><?php }
}
