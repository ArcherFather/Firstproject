<?php
/* Smarty version 3.1.33, created on 2019-02-25 07:51:46
  from 'C:\xampp\htdocs\smarty\templates\reply.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c739082ac1156_01286832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30979711731a00b3bf8498a303464f0513d87efd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\reply.tpl',
      1 => 1551077504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c739082ac1156_01286832 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
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
                <?php if (isset($_smarty_tpl->tpl_vars['permission_now']->value)) {?>
            回覆主題 : <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <br><br>

            回覆內容 : <font size = "1" color = "gray">(最多輸入100個字元)</font><br>
            <textarea type ="text" name="content"  style="width:300px; height:200px;" style="vertical-align:text-top;" maxlength="100"></textarea><br><br>
            
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

        <?php } else { ?>              <?php echo '<script'; ?>
> swal({ title: "請先登入", text: "本留言板只允許會員回覆", icon: "warning", button: "確定 " }).then(function() { window.location = '<?php echo $_smarty_tpl->tpl_vars['script']->value['login'];?>
'; }); <?php echo '</script'; ?>
>
        <?php }?>
    </div>
</div>
</form>
</html><?php }
}
