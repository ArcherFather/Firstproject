<?php
/* Smarty version 3.1.33, created on 2019-02-25 10:37:17
  from 'C:\xampp\htdocs\smarty\templates\board.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73b74d38ef30_32915596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '267b985e288fbcbb7d8098c58f109273e6c27283' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\board.tpl',
      1 => 1551087435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73b74d38ef30_32915596 (Smarty_Internal_Template $_smarty_tpl) {
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
    }
    table{
        border-spacing:0;   <!-- 表格欄位水平間的距離 表格欄位垂直間的距離 -->
        font-weight:bold;
        table-layout:fixed; <!-- 使表格水平布局不受格內文字影響 -->
    }
    td{
        font-size: 15px;
        font-weight:bold;
        overflow:hidden; <!-- 文本超出時隱藏 -->
        white-space:nowrap; <!-- 規定表格內容不換行 -->
    
        margin: 0;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        padding: 0;
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }
    font{
        font-family:'微軟正黑體';
    }
    body {
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
    .css-table{
        display: table;
        style="background-color:#FFAFFE;
        width:100%;
        height:20px;
        margin:0 auto;  <!-- 外距 (與外邊界的距離) -->
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
    .page{
        text-align:center;
    }
    .btn-bar{
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
    #DIV-search{
        display:block;
        text-align:center;
    }
    #DIV-lm{
        display:block;
        text-align:right;
        padding-right: 510px;
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
    <br />
        <div style="text-align:center" width="500" style="padding-right:510px;">
                <div id="DIV-search">
            <form action="<?php echo $_smarty_tpl->tpl_vars['script']->value['post'];?>
" method="get">
            <select name="field" style="background-color:#117e96; color: white; border-radius: 5px; border:2px #51A1B4 double;">
                　<option value="1">標題</option>
                　<option value="2">留言者</option>
            </select>
            <input type="varchar" name="search" placeholder="在此搜尋文章..." size="30" maxlength="20" style="background-color:#ECF8DF; border-radius: 5px;">
            <input type="submit" class = "btn-bar" value="搜尋">
            </form>
        </div>
                <div id="DIV-lm">
            <input type="button" class = "btn-bar" value="我要留言" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['leave_msg'];?>
'" style="width:100px; height:40px; font-size : 18px; border-radius: 10px; border:3px #51A1B4 double;">
        </div>
    </div>

    <p>
        <div class="css-table">
    <table>
        <tr align= "right">
        </tr>
        <tr>
            <td bgcolor=#51A1B4 width="100" style="text-align: center;"><font color="white">編 號</font></td>
            <td bgcolor=#51A1B4 width="550" style="text-align: center;"><font color="white">文 章 主 題</font></td>
            <td bgcolor=#51A1B4 width="150" style="text-align: center;"><font color="white">留 言 者</font></td>
            <td bgcolor=#51A1B4 width="100" style="text-align: center;"><font color="white">發 文 日 期</font></td>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
        <tr>
            <td bgcolor=#ECF8DF width="100" style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['a']->value['BID']+($_smarty_tpl->tpl_vars['page']->value-1)*10;?>
 </td>
            <td bgcolor=#ECF8DF width="550" style="text-align: left;"><a href="<?php echo $_smarty_tpl->tpl_vars['script']->value['msg_board'];?>
? AID=<?php echo $_smarty_tpl->tpl_vars['a']->value['AID'];?>
"> <?php echo $_smarty_tpl->tpl_vars['a']->value['Title'];?>
 </a></td>
            <td bgcolor=#ECF8DF width="150" style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['a']->value['Nickname'];?>
 </td>
            <td bgcolor=#ECF8DF width="100" style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['a']->value['Date'];?>
 </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>


    </div>
    <br />
    <div class="page">
                        共 <?php echo $_smarty_tpl->tpl_vars['data_nums']->value;?>
 筆 - 在第 <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 頁 - 共 <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
 頁
            <?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
                <br /><a href=?page=1>首頁 </a>第 
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['pages']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_prefixVariable1+1 - (1) : 1-($_prefixVariable1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable2-5 < $_smarty_tpl->tpl_vars['i']->value && $_smarty_tpl->tpl_vars['i']->value < $_prefixVariable3+5) {?>
                            <a href=?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                    <?php }?>
                <?php }
}
?>
                頁 <a href=?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
> 末頁</a><br /><br />
            <?php }?>

                <br><a href="<?php echo $_smarty_tpl->tpl_vars['script']->value['menu'];?>
">回主畫面</a><br>
    </div>
</div>
</body>
</html><?php }
}
