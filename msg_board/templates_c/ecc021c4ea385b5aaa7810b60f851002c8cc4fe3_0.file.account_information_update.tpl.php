<?php
/* Smarty version 3.1.33, created on 2019-02-26 02:50:32
  from 'C:\xampp\htdocs\smarty\templates\account_information_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c749b685c3053_28314551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecc021c4ea385b5aaa7810b60f851002c8cc4fe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\account_information_update.tpl',
      1 => 1551145828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c749b685c3053_28314551 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> <?php echo $_smarty_tpl->tpl_vars['title_window']->value;?>
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
        <b>- 修改會員資訊 -</b><br><br>

        帳號 :
        <input type ="varchar" name="id" size="20" maxlength="25" value = "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> 
        <font size = "1" color = "gray">(最多輸入25個字元)</font>
        <br><br>
        密碼 :
        <input type ="password" name="pd" size="20" maxlength="20">
        <font size = "1" color = "gray">(須為由數字與字母組成的6~20個字元)</font>
        <br><br>
        姓名 :
        <input type ="varchar" name="name" maxlength="20" value = "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
        <font size = "1" color = "gray">(最多輸入20個字元)</font>
        <br><br>
        暱稱 :
        <input type ="varchar" name="nickname" maxlength="20" value = "<?php echo $_smarty_tpl->tpl_vars['nname']->value;?>
">
        <font size = "1" color = "gray">(最多輸入20個字元)</font>
        <br><br>
        性別 :
        <input type ="radio" name="gender" value="M" <?php if ($_smarty_tpl->tpl_vars['gender']->value == "M") {?> checked <?php }?> >男
        <input type ="radio" name="gender" value="F" <?php if ($_smarty_tpl->tpl_vars['gender']->value == "F") {?> checked <?php }?> >女
        <br><br>
        電話號碼 :
        <input type ="int" name="phone" maxlength="11" value = "<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"><br><br>
        Email :
        <input type ="text" name="email" maxlength="50" value = "<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"><br><br>

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

        <input type="submit" value="確定修改" style="background-color:#117e96; border:2px #51A1B4 double; color: white; border-radius: 5px">
    </div>
</div>	
</form>
</html><?php }
}
