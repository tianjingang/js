<?php /* Smarty version Smarty-3.1.18, created on 2016-02-20 03:45:52
         compiled from ".\templates\form.html" */ ?>
<?php /*%%SmartyHeaderCode:2238756c7e17075a3a7-11270582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8be569f829307d00d8453d79f7bdeab81a4af42' => 
    array (
      0 => '.\\templates\\form.html',
      1 => 1455939889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2238756c7e17075a3a7-11270582',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56c7e17079dff1_43635716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c7e17079dff1_43635716')) {function content_56c7e17079dff1_43635716($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="in.php" method="post">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="pwd"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="添加"/></td>
        </tr>
    </table>
</form>
</body>
</html><?php }} ?>
