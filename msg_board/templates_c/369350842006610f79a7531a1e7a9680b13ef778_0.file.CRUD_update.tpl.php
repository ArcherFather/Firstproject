<?php
/* Smarty version 3.1.33, created on 2019-02-22 06:55:43
  from 'C:\xampp\htdocs\smarty\templates\CRUD_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6f8edf3d9d09_57404992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '369350842006610f79a7531a1e7a9680b13ef778' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\CRUD_update.tpl',
      1 => 1550571238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6f8edf3d9d09_57404992 (Smarty_Internal_Template $_smarty_tpl) {
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
</style>
</head>
<form action="<?php echo $_smarty_tpl->tpl_vars['script']->value['post'];?>
" method="post">
<div class="board-page">
    <div class="input-area">
        <b>- 會員資訊 -</b><br><br>

        帳號 : <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 <input type ="hidden" name="id" value = "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
")> <br><br>
        姓名 : <input type ="varchar" name="name" maxlength="20" value = "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
")><br><br>
        暱稱 : <input type ="varchar" name="nickname" maxlength="20" value = "<?php echo $_smarty_tpl->tpl_vars['nname']->value;?>
")><br><br>
        性別 :
        <input type ="radio" name="gender" value="M" <?php if ($_smarty_tpl->tpl_vars['gender']->value == "M") {?> checked <?php }?> >男
        <input type ="radio" name="gender" value="F" <?php if ($_smarty_tpl->tpl_vars['gender']->value == "F") {?> checked <?php }?> >女
        <br><br>
        電話號碼 :  <input type ="varchar" name="phone" value = "<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"><br><br>
        Email : <input type ="text" name="email" value = "<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"><br><br>

        <input type ="submit" value="確定修改"><br><br>

        <a href="<?php echo $_smarty_tpl->tpl_vars['script']->value['CRUD'];?>
"> - 返回會員管理介面 - </a><br>
    </div>
</div>
</form>
</html><?php }
}
