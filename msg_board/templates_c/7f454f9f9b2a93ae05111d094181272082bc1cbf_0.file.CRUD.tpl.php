<?php
/* Smarty version 3.1.33, created on 2019-02-26 03:50:11
  from 'C:\xampp\htdocs\smarty\templates\CRUD.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c74a9637fe3c9_55229501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f454f9f9b2a93ae05111d094181272082bc1cbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\CRUD.tpl',
      1 => 1551149410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c74a9637fe3c9_55229501 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
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
    }
</style>
<style type="text/css">
    .board-page{
        text-align:center;
        <!-- background-color:#FFAC55; -->
        width:100%;
        height:100%;
    }
    .css-table{
        display: table;
        style="background-color:#FFAFFE;
        width:100%;
        height:20px;
        margin:0 auto;  <!-- 外距 (與外邊界的距離) -->
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
    .btn-unlock{
        background-color:#FF1493;
        border:2px #FFC0CB double;
        color: white;
        border-radius: 5px;
    }
    .btn-unlock:hover      {
        background-color:#FFC0CB;
        color: #FF1493;
    }
</style>
<body>
<div class="board-page">

    <b><font color=#117e96>[ 會員管理 ]</font></b><br><br>

        <div class="css-table">
        <table>
        <tr>
            <td bgcolor=#51A1B4 width="40" style="text-align: center;"><font color="white">編號</font></td>
            <td bgcolor=#51A1B4 width="200" style="text-align: center;"><font color="white">帳號</font></td>
            <td bgcolor=#51A1B4 width="150" style="text-align: center;"><font color="white">姓名</font></td>
            <td bgcolor=#51A1B4 width="150" style="text-align: center;"><font color="white">暱稱</font></td>
            <td bgcolor=#51A1B4 width="50" style="text-align: center;"><font color="white">性別</font></td>
            <td bgcolor=#51A1B4 width="150" style="text-align: center;"><font color="white">電話號碼</font></td>
            <td bgcolor=#51A1B4 width="300" style="text-align: center;"><font color="white">Email</font></td>
            <td bgcolor=#51A1B4 width="80" style="text-align: center;"><font color="white">狀態</font></td>
            <td bgcolor=#117e96 width="150" style="text-align: center;"><font color="white">編輯</font></td>
        </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['member']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
            <tr>
                <td bgcolor=#51A1B4 width="20" style="text-align: center;"><font color="white"><?php echo $_smarty_tpl->tpl_vars['m']->value['BID']+($_smarty_tpl->tpl_vars['page']->value-1)*10;?>
</font></td>
                <td bgcolor=#ECF8DF width="200" style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['m']->value['ID_number'];?>
 </a></td>
                <td bgcolor=#ECF8DF width="150" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['m']->value['Name'];?>
</td>
                <td bgcolor=#ECF8DF width="150" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['m']->value['Nickname'];?>
</td>
                <td bgcolor=#ECF8DF width="50" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['m']->value['Gender'];?>
</td>
                <td bgcolor=#ECF8DF width="150" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['m']->value['Phone_number'];?>
</td>
                <td bgcolor=#ECF8DF width="300" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['m']->value['Email'];?>
</td>
                <td bgcolor=#ECF8DF width="80" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['m']->value['status'];?>
</td>
                <td bgcolor=#ECF8DF width="150" style="text-align: center;">
                    <input type="button" class = "btn-normal" value="修改" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['CRUD_u'];?>
? ID_number=<?php echo $_smarty_tpl->tpl_vars['m']->value['ID_number'];?>
'">

                    <?php if ($_smarty_tpl->tpl_vars['m']->value['Locked'] == 0) {?>
                        <input type="button" class = "btn-normal" value="鎖定" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['CRUD_l'];?>
? ID_number=<?php echo $_smarty_tpl->tpl_vars['m']->value['ID_number'];?>
'">
                    <?php } elseif ($_smarty_tpl->tpl_vars['m']->value['Locked'] == 1) {?>
                        <input type="button" class = "btn-unlock" value="解鎖" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['CRUD_l'];?>
? ID_number=<?php echo $_smarty_tpl->tpl_vars['m']->value['ID_number'];?>
'">
                    <?php }?>

                    <input type="button" class = "btn-normal" value="刪除" onclick='
                        swal({
                            title: "確定要刪除 <?php echo $_smarty_tpl->tpl_vars['m']->value['ID_number'];?>
 的會員資料嗎?",
                            text: "一旦刪除，便無法再次回復!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                swal("成功刪除該會員資料", {
                                icon: "success",
                                }).then(function() { window.location = "<?php echo $_smarty_tpl->tpl_vars['script']->value['CRUD_d'];?>
? ID_number=<?php echo $_smarty_tpl->tpl_vars['m']->value['ID_number'];?>
" });
                            } else {
                                swal("已取消刪除");
                            }
                        });'>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <br />

        共 <?php echo $_smarty_tpl->tpl_vars['data_nums']->value;?>
 筆 - 在第 <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 頁 - 共 <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
 頁
    <br /><a href=?page=1>首頁</a>第 
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


        <br><a href="<?php echo $_smarty_tpl->tpl_vars['script']->value['menu'];?>
">回主畫面</a><br>

</div>
</body>
</html><?php }
}
