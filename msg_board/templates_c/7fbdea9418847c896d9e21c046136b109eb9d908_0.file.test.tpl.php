<?php
/* Smarty version 3.1.33, created on 2019-02-18 03:28:00
  from 'C:\xampp\htdocs\smarty\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6a183073b506_01415685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fbdea9418847c896d9e21c046136b109eb9d908' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\test.tpl',
      1 => 1550456115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6a183073b506_01415685 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head><title>hello,<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</title>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
    alert('<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
');
<?php echo '</script'; ?>
>
</head>
<body>
hello,<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
</body>
</html><?php }
}
