<?php
/* Smarty version 3.1.33, created on 2019-02-27 01:26:50
  from 'C:\xampp\htdocs\smarty\訂購系統\templates\logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c75d94adec042_21268752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92816a0a2fbf16e82e686f5a6399d46bbeda1e2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\訂購系統\\templates\\logout.tpl',
      1 => 1551227140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c75d94adec042_21268752 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
<title><?php ob_start();
echo $_smarty_tpl->tpl_vars['title_window']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
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
</style>
    <?php echo '<script'; ?>
> swal({ title: "登出中", text: "畫面將自動跳回主選單", buttons: false}); <?php echo '</script'; ?>
>
    <meta http-equiv=REFRESH CONTENT=1;url=<?php echo $_smarty_tpl->tpl_vars['script']->value['home'];?>
>
</body>
</html><?php }
}
