<?php /* Smarty version Smarty-3.1.18, created on 2016-02-20 08:39:01
         compiled from ".\templates\form.html" */ ?>
<?php /*%%SmartyHeaderCode:2336856c81de1eb0fa8-55338789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8be569f829307d00d8453d79f7bdeab81a4af42' => 
    array (
      0 => '.\\templates\\form.html',
      1 => 1455957535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2336856c81de1eb0fa8-55338789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56c81de1ee4ed2_88877172',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c81de1ee4ed2_88877172')) {function content_56c81de1ee4ed2_88877172($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="in.php" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>文件名</td>
            <td><input type="text" name="filename"/></td>
        </tr>
        <tr>
            <td>封面</td>
            <td><input type="file" name="files"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="上传"/></td>
        </tr>
    </table>
</form>
</body>
</html><?php }} ?>
