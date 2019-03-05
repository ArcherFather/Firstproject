<?php
/* Smarty version 3.1.33, created on 2019-02-25 01:40:13
  from 'C:\xampp\htdocs\smarty\templates\leave_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73396d917fe3_05394529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0beba4d29d150203cae2f5426082a561efc8948' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\leave_message.tpl',
      1 => 1551055210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73396d917fe3_05394529 (Smarty_Internal_Template $_smarty_tpl) {
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
    le { margin-left:0.7em;}
</style>
</head>
<form action="<?php echo $_smarty_tpl->tpl_vars['script']->value['post'];?>
" method="post">
<div class="board-page">
    <div class="input-area">
        <b>- 發表留言 -</b><br><br>
        (有<font color="red"> * </font>欄位為必填)<br><br>

                <?php if (isset($_smarty_tpl->tpl_vars['permission_now']->value)) {?>
            <font color="red">* </font>請輸入暱稱 : 
            <input type ="varchar" name="nickname" maxlength="20" value= "<?php echo $_smarty_tpl->tpl_vars['nname']->value;?>
" readonly><br><br>
            <le>請輸入性別 :</le>
            <input type ="radio" name="gender" value="M" <?php if ($_smarty_tpl->tpl_vars['gender']->value == "M") {?> checked <?php } else { ?> disabled <?php }?>>男
            <input type ="radio" name="gender" value="F" <?php if ($_smarty_tpl->tpl_vars['gender']->value == "F") {?> checked <?php } else { ?> disabled <?php }?>>女
            <br><br>
            <font color="red">* </font>請輸入聯絡電話 : 
            <input type ="varchar" name="phone" maxlength="11" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" readonly><br><br>
            <font color="red">* </font>請輸入Email :
            <input type ="text" name="email" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" readonly><br><br>
        <?php } else { ?>              <font color="red">* </font>請輸入暱稱 :
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
        <?php }?>

        <font color="red">* </font>主題 : <font size = "1" color = "gray">(最多輸入50個字元)</font><br>
        <input type ="text" name="title" style="width:300px;" maxlength="50"><br><br>

        <font color="red">* </font>內容 : <font size = "1" color = "gray">(最多輸入5000個字元)</font><br>
        <textarea type ="text" name="content"  style="width:300px; height:200px;" style="vertical-align:text-top;" maxlength="5000"></textarea><br><br>

        請輸入下圖字樣：
                <?php echo '<script'; ?>
>
        function refresh_code(){ 
            document.getElementById("imgcode").src="<?php echo $_smarty_tpl->tpl_vars['script']->value['captcha'];?>
"; 
        } 
        <?php echo '</script'; ?>
>
                <input type="text" name="checkword" size="10" maxlength="4" autocomplete="off" />
                <p><img id="imgcode" src="<?php echo $_smarty_tpl->tpl_vars['script']->value['captcha'];?>
" onclick="refresh_code()" /><br />
        (點擊圖片可以更換驗證碼)</p>

        <input type="submit" value="送 出" style="width:300px; height:30px; background-color:#117e96; border:2px #51A1B4 double; color: white; border-radius: 5px">
    </div>
</div>
</form>
</html><?php }
}
