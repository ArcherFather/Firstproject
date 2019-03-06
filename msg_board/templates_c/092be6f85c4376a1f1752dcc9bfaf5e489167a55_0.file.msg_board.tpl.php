<?php
/* Smarty version 3.1.33, created on 2019-02-25 10:34:58
  from 'C:\xampp\htdocs\smarty\templates\msg_board.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73b6c26faee7_65094322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '092be6f85c4376a1f1752dcc9bfaf5e489167a55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\msg_board.tpl',
      1 => 1551087297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73b6c26faee7_65094322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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
        border-spacing:1 1;   <!-- 表格欄位水平間的距離 表格欄位垂直間的距離 -->
        font-weight:bold;
        table-layout:fixed; <!-- 使表格水平布局不受格內文字影響 -->
        word-break:break-all;          word-wrap:break-word;      }
    td{
        font-size: 15px;
        font-weight:bold;
        overflow:hidden; <!-- 文本超出時隱藏 -->
        <!-- white-space:nowrap; 規定表格內容不換行 -->
        word-wrap:break-word;          word-break:break-all;      }
    font{
        font-family:'微軟正黑體';
    }
</style>
<style type="text/css">
    .board-page{
        text-align:center;
        width:100%;
        height:100%;
    }
    .css-table{
        position:relative;
        top:20px;
        left:37%;
        overflow:auto;
        text-align:left;
        display: table;
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
    .btn-manager{
        background-color:#FFC0CB;
        border:2px #FF1493 double;
        color: blue;
        border-radius: 5px;
    }
    .btn-manager:hover      {
        background-color:#FF1493;
        color: #FFC0CB;
    }
</style>
<body>
<div class="board-page">
    <div class="css-table">
                <table style="word-break:break-all; word-wrap:break-all;">
            <tr>
                <td bgcolor=#51A1B4 width="500" style="text-align: left;"><font color="white">主題 : </font><?php echo $_smarty_tpl->tpl_vars['title_a']->value;?>
 </td>
            </tr>
            <tr>
                <td bgcolor=#51A1B4 width="500" style="text-align: left;"><font color="white">留言者 : </font><?php echo $_smarty_tpl->tpl_vars['nname_a']->value;?>
 </td>
            </tr>
            <tr>
                                <td bgcolor=#ECF8DF width="500" height="400" style="vertical-align:text-top;"> <?php echo nl2br($_smarty_tpl->tpl_vars['content_a']->value);?>
 <p> <font size = "1" color = "gray"><發表時間 : <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
></font></td>
            </tr>
            <tr>
                <td align= "right">
                    <input type="button" class = "btn-normal" value="我要回覆" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['reply'];?>
? Title=<?php echo $_smarty_tpl->tpl_vars['title_a']->value;?>
'">
                                <?php if ($_smarty_tpl->tpl_vars['user_eq_author']->value) {?>
                    <input type="button" class = "btn-normal" value="修改留言" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['update'];?>
? AID=<?php echo $_smarty_tpl->tpl_vars['AID_now']->value;?>
'">
                    <input type="button" class = "btn-normal" value="刪除留言" onclick='
                        swal({
                            title: "確定要刪除此留言嗎?",
                            text: "一旦刪除，便無法再次回復!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                swal("刪除成功", {
                                icon: "success",
                                }).then(function() { window.location = "<?php echo $_smarty_tpl->tpl_vars['script']->value['delete'];?>
? AID=<?php echo $_smarty_tpl->tpl_vars['AID_now']->value;?>
" });
                            } else {
                                swal("已取消刪除");
                            }
                        });'>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['permission_now']->value == 2 && $_smarty_tpl->tpl_vars['permission']->value < 2) {?>
                    <input type="button" class = "btn-manager" value="刪除留言" onclick='
                        swal({
                            title: "確定要刪除此留言嗎?",
                            text: "一旦刪除，便無法再次回復!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                swal("刪除成功", {
                                icon: "success",
                                }).then(function() { window.location = "<?php echo $_smarty_tpl->tpl_vars['script']->value['delete'];?>
? AID=<?php echo $_smarty_tpl->tpl_vars['AID_now']->value;?>
" });
                            } else {
                                swal("已取消刪除");
                            }
                        });'>
                <?php }?>
                </td>
            </tr>
        </table>
    </div>
    <p>
        <div class="css-table">
        回覆區 :
        <table>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['r']->value['Permission'] == 2) {?>
                    <td bgcolor=#FF1493 width="100" style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['r']->value['Nickname'];?>
 </td>
                                        <td bgcolor=#FFC0CB width="400" style="text-align: left;"> <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['r']->value['Content'],array('\r','\n','\r\n','\n\r'),' ');?>
 <font size = "1" color = "gray"><<?php echo $_smarty_tpl->tpl_vars['r']->value['Date'];?>
></font></td>
                <?php } else { ?>
                    <td bgcolor=#51A1B4 width="100" style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['r']->value['Nickname'];?>
 </td>
                    <td bgcolor=#ECF8DF width="400" style="text-align: left;"> <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['r']->value['Content'],array('\r','\n','\r\n','\n\r'),' ');?>
 <font size = "1" color = "gray"><<?php echo $_smarty_tpl->tpl_vars['r']->value['Date'];?>
></font></td>
                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['r']->value['user_eq_author']) {?>
                <td>
                    <input type="button" class = "btn-normal" value="修改" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['script']->value['update_r'];?>
? RID=<?php echo $_smarty_tpl->tpl_vars['r']->value['RID'];?>
'">
                    <input type="button" class = "btn-normal" value="刪除" onclick='
                        swal({
                            title: "確定要刪除此回覆嗎?",
                            text: "一旦刪除，便無法再次回復!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                swal("刪除成功", {
                                icon: "success",
                                }).then(function() { window.location = "<?php echo $_smarty_tpl->tpl_vars['script']->value['delete_r'];?>
? RID=<?php echo $_smarty_tpl->tpl_vars['r']->value['RID'];?>
 & AID=<?php echo $_smarty_tpl->tpl_vars['r']->value['AID'];?>
" });
                            } else {
                                swal("已取消刪除");
                            }
                        });'>
                </td>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['permission_now']->value == 2 && $_smarty_tpl->tpl_vars['r']->value['Permission'] < 2) {?>
                <td>
                    <input type="button" class = "btn-manager" value="刪除" onclick='
                        swal({
                            title: "確定要刪除此回覆嗎?",
                            text: "一旦刪除，便無法再次回復!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                swal("刪除成功", {
                                icon: "success",
                                }).then(function() { window.location = "<?php echo $_smarty_tpl->tpl_vars['script']->value['Rdr'];?>
? RID=<?php echo $_smarty_tpl->tpl_vars['r']->value['RID'];?>
 & AID=<?php echo $_smarty_tpl->tpl_vars['r']->value['AID'];?>
" });
                            } else {
                                swal("已取消刪除");
                            }
                        });'>
                </td>
                <?php }?>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
<br /><br />

共 <?php echo $_smarty_tpl->tpl_vars['data_nums']->value;?>
 筆 - 在第 <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 頁 - 共 <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
 頁
<?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
    <br /><a href="? page=1 & AID=<?php echo $_smarty_tpl->tpl_vars['AID_now']->value;?>
"> 首頁 </a>第 
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
if ($_prefixVariable2-3 < $_smarty_tpl->tpl_vars['i']->value && $_smarty_tpl->tpl_vars['i']->value < $_prefixVariable3+3) {?>
            <a href="? page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 & AID=<?php echo $_smarty_tpl->tpl_vars['AID_now']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
        <?php }?>
    <?php }
}
?>
    頁 <a href="? page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
 & AID=<?php echo $_smarty_tpl->tpl_vars['AID_now']->value;?>
"> 末頁</a>
<?php }?>
<br /><br />

<br><a href="<?php echo $_smarty_tpl->tpl_vars['script']->value['board'];?>
">回留言板</a><br>

</div>
</body>
</html><?php }
}
