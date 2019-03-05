<?php
/* Smarty version 3.1.33, created on 2019-02-22 06:52:43
  from 'C:\xampp\htdocs\smarty\templates\msg_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6f8e2b44b873_82327742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '315c43f65fa52b6a79b393c02eb2537a245bcfaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\msg_update.tpl',
      1 => 1550814754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6f8e2b44b873_82327742 (Smarty_Internal_Template $_smarty_tpl) {
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
        <b>- 修改留言 -</b><br><br>

        主題 : <font size = "1" color = "gray">(最多輸入50個字元)</font><br>
        <input type ="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" maxlength="50"><br><br>

        內容 : <font size = "1" color = "gray">(最多輸入5000個字元)</font><br>
        <textarea type ="text" name="content"  style="width:300px; height:200px;" style="vertical-align:text-top;" maxlength="5000"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
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
