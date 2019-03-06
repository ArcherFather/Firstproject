<?php
/* Smarty version 3.1.33, created on 2019-02-22 08:06:38
  from 'C:\xampp\htdocs\smarty\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6f9f7e18fee7_18738798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aa40ed9d60f48e67ff3da192b8a1e27cecf0367' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\menu.tpl',
      1 => 1550819196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6f9f7e18fee7_18738798 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
        width:1920px;
        height:1080px;
        MARGIN-RIGHT: auto;
        MARGIN-LEFT: auto;
    }
    .member-information{
        margin: 0px;
        border-bottom: 3px #cdcdcd solid;
        background-color: #117e96;
        height:40px;
        align : right;
    }
    .bar-objects{
        padding-top: 8px;
        padding-right: 450px;
        text-align:right;
    }
    .btn-bar{
        onmouseover ="this.style.backgroundColor='Yellow'";
        background-color:#117e96;
        border:2px #51A1B4 double;
        color: white;
        border-radius: 5px;
        font-family: 微軟正黑體;
    }
    .btn-bar:hover      {
        background-color:#51A1B4;
        color: #ECF8DF;
    }
</style>
</head>
<body>
<div class="board-page">
    <div class="member-information">
        <div class="bar-objects">
                                                <?php if (!isset($_smarty_tpl->tpl_vars['permission_user']->value)) {?>
                <input type="button" class = "btn-bar" value="註冊帳號" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['regist'];?>
'">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" class = "btn-bar" value="帳號登入" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['login'];?>
'">
            <?php } else { ?>
                <font color="white">Hello! <?php echo $_smarty_tpl->tpl_vars['nname_user']->value;?>
 </font> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" class = "btn-bar" value="帳號資訊" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['account'];?>
'">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" class = "btn-bar" value="登出" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['logout'];?>
'">
            
                <?php if ($_smarty_tpl->tpl_vars['permission_user']->value == 2) {?>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" class = "btn-bar" value="會員管理" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['CRUD'];?>
'">
                <?php }?>
            <?php }?>
        </div>
    </div>
<br><br>

<div align = "center">
    <!--<a href="board.php"><img  width="400px" height="300px" src="https://www.twcsi.org.tw/UserFiles/image/20160428004.png"></a><br>-->   
    <a href="<?php echo $_smarty_tpl->tpl_vars['script']->value['board'];?>
">進入留言板</a>
</div>
</div>
</body>
</html><?php }
}
