<?php
/* Smarty version 3.1.33, created on 2019-02-22 06:54:47
  from 'C:\xampp\htdocs\smarty\templates\reply_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6f8ea7bbef21_61946198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69b90ffa841b9bb9c2ed596378323c1151e0c0a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\reply_update.tpl',
      1 => 1550814869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6f8ea7bbef21_61946198 (Smarty_Internal_Template $_smarty_tpl) {
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
    le { margin-left:0.7em;}
</style>
</head>
<form action="<?php echo $_smarty_tpl->tpl_vars['script']->value['post'];?>
" method="post">
<div class="board-page">
    <div class="input-area">
        <b>- 修改回覆 -</b><br><br>

        回覆內容 : <font size = "1" color = "gray">(最多輸入100個字元)</font><br>
        <textarea type ="text" name="content"  style="width:300px; height:200px;" style="vertical-align:text-top;" maxlength="100"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea><br><br>

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
