<?php /* Smarty version Smarty-3.1.18, created on 2016-02-22 02:28:41
         compiled from ".\templates\form.html" */ ?>
<?php /*%%SmartyHeaderCode:856656ca5bca466b45-88823804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8be569f829307d00d8453d79f7bdeab81a4af42' => 
    array (
      0 => '.\\templates\\form.html',
      1 => 1456108113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '856656ca5bca466b45-88823804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56ca5bca4a61e4_59163466',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ca5bca4a61e4_59163466')) {function content_56ca5bca4a61e4_59163466($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="in.php" method="post" enctype="multipart/form-data">
    <h1>我的请假</h1>
    <table border="1">
        <tr>
            <td>开始时间</td>
            <td><input type="text" name="startdate"/></td>
        </tr>
        <tr>
            <td>结束时间</td>
            <td><input type="text" name="overdate"/></td>
        </tr>
        <tr>
            <td>请假天数</td>
            <td><input type="text" name="day"/></td>
        </tr>
        <tr>
            <td>请假事由</td>
            <td><textarea rows="5" cols="10" name="why"></textarea>
            </td>
        </tr>
        <tr>
            <td>图片</td>
            <td><input type="file" name="files"/></td>
        </tr>
        <tr>
            <td>审批人</td>
            <td><select name="person">
                <option value="李明">李明</option>
                <option value="张立伟">张立伟</option>
                <option value="张斌">张斌</option>
                <option value="葛红娟">葛红娟</option>
            </select></td>
        </tr>
        <tr>
            <td><input type="submit" value="提交"/></td>
        </tr>
    </table>
</form>
</body>
</html><?php }} ?>
