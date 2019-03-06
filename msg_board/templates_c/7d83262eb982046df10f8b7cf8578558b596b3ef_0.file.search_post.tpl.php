<?php
/* Smarty version 3.1.33, created on 2019-02-25 07:56:51
  from 'C:\xampp\htdocs\smarty\templates\search_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7391b3a72e69_71170843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d83262eb982046df10f8b7cf8578558b596b3ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\search_post.tpl',
      1 => 1551077018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7391b3a72e69_71170843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<html>
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
</style>
<?php echo '<script'; ?>
 type="text/javascript">
function keyword_marked(title,keyword)
{
    title = title.replace(keyword, '<font color="red">'+keyword+'</font>');
    document.getElementById("StringFont").innerHTML = title;
    document.write(title);
}
<?php echo '</script'; ?>
>
</head>
<body>

        <?php if (!isset($_smarty_tpl->tpl_vars['search']->value)) {?>
        <?php echo '<script'; ?>
> swal({ title: "請輸入欲搜尋的關鍵字", icon: "warning" ,button: "確 定 " }).then(function() { history.go(-1); }); <?php echo '</script'; ?>
>
        <?php return;?>
    <?php }?>

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
    <div align= "left"  width="500" style="padding-left:510px;">
        <b>以下顯示搜尋 <font color="blue"><?php echo $_smarty_tpl->tpl_vars['case']->value;?>
</font> 與 " <font color="blue"><?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</font> " 相關的結果 ...</b>
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

            <?php if ($_smarty_tpl->tpl_vars['permission_user']->value == 2) {?>
                <td bgcolor=#51A1B4 width="100" style="text-align: center;"><font color="white">編 輯</font></td>
            <?php }?>
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
"> <?php if ($_smarty_tpl->tpl_vars['field']->value == 1) {?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['a']->value['Title'],$_prefixVariable1,"<font color =#ff2d2d>".((string)$_smarty_tpl->tpl_vars['search']->value)."</font>");?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['a']->value['Title'];?>
 <?php }?> </a></td>
            <td bgcolor=#ECF8DF width="150" style="text-align: center;"> <?php if ($_smarty_tpl->tpl_vars['field']->value == 2) {?> <?php ob_start();
echo $_smarty_tpl->tpl_vars['search']->value;
$_prefixVariable2 = ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['a']->value['Nickname'],$_prefixVariable2,"<font color =#ff2d2d>".((string)$_smarty_tpl->tpl_vars['search']->value)."</font>");?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['a']->value['Nickname'];?>
  <?php }?> </td>
            <td bgcolor=#ECF8DF width="100" style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['a']->value['Date'];?>
 </td>

            <?php if ($_smarty_tpl->tpl_vars['permission_user']->value == 2) {?>
                <td bgcolor=#ECF8DF width="100" style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['script']->value['RUD_del'];?>
? AID=<?php echo $_smarty_tpl->tpl_vars['a']->value['AID'];?>
">刪 除</a></td>
            <?php }?>
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
                <br /><a href="?page=1&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&field=<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
">首頁 </a>第 
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['pages']->value;
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_prefixVariable3+1 - (1) : 1-($_prefixVariable3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable4-5 < $_smarty_tpl->tpl_vars['i']->value && $_smarty_tpl->tpl_vars['i']->value < $_prefixVariable5+5) {?>
                        <a href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&field=<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                    <?php }?>
                <?php }
}
?>
                頁 <a href="?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&field=<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
"> 末頁</a><br /><br />
            <?php }?>

                <br><a href="<?php echo $_smarty_tpl->tpl_vars['script']->value['board'];?>
">離開搜尋結果</a><br>
    </div>
</div>
</body>
</html><?php }
}
