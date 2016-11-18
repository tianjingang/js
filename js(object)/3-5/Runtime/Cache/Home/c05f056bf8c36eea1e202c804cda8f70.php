<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传相片</title>
</head>
<body>
<h2>图片上传</h2>

<form action="/js(object)/3-5/index.php/Home/Index/photoupload/" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>图片名字</td>
            <td><input type="text" name="photoname"/></td>
        </tr>
        <tr>
            <td>选择图片</td>
            <td><input type="file" name="photopath"/></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="上传"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>