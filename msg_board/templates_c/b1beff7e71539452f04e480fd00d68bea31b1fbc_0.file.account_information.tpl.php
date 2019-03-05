<?php
/* Smarty version 3.1.33, created on 2019-02-25 10:54:38
  from 'C:\xampp\htdocs\smarty\templates\account_information.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73bb5ecb2262_79570993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1beff7e71539452f04e480fd00d68bea31b1fbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\account_information.tpl',
      1 => 1551088477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73bb5ecb2262_79570993 (Smarty_Internal_Template $_smarty_tpl) {
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
    .information{
        position:relative;
        top:20px;
        left:40%;
    }
    .btn-normal{
        background-color:#117e96;
        border:2px #51A1B4 double;
        color: white;
        border-radius: 5px;
    }
    .btn-normal:hover      {
        background-color:#51A1B4;
        color: #ECF8DF;
    }
</style>
</head>
<body>
<div class="board-page">
    <div class="information">

                <b><font color=#117e96>[ 帳號資訊 ]</font></b><br><br>

        <?php if (isset($_smarty_tpl->tpl_vars['permission_now']->value)) {?>
            <b>帳號 : </b> <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 <br><br>
            <b>姓名 : </b> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <br><br>
            <b>暱稱 : </b> <?php echo $_smarty_tpl->tpl_vars['nname']->value;?>
 <br><br>
            <b>性別 : </b> <?php if ($_smarty_tpl->tpl_vars['gender']->value == "M") {?> 男 <?php } elseif ($_smarty_tpl->tpl_vars['gender']->value == "F") {?> 女 <?php }?> <br><br>
            <b>聯絡電話 : </b> <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 <br><br>
            <b>Email : </b> <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 <br><br>
            <b>級別 : </b> <?php echo $_smarty_tpl->tpl_vars['status']->value;?>
 <br><br>

            <p>
            <input type="button" class = "btn-normal" value="修改資料" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['update'];?>
'">&nbsp;&nbsp;
            <input type="button" class = "btn-normal" value="回主畫面" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['menu'];?>
'"><br><br>
            </p>
        <?php }?>
    </div>
</div>
</body>
</html><?php }
}
