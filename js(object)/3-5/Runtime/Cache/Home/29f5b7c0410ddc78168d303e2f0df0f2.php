<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人信息</title>
</head>
<body>
<center>
    <h3>个人信息</h3>
<table border="1">
    <tr>
        <td>用户名</td>
        <td><?php echo ($arr["username"]); ?></td>
    </tr>
    <tr>
        <td>密码</td>
        <td><?php echo ($arr["pwd"]); ?></td>
    </tr>
    <tr>
        <td>头像</td>
        <td><?php echo ($arr["photo"]); ?></td>
    </tr>
</table>.
    <h2><a href="/js(object)/3-5/index.php/Home/Index/usershow/id/<?php echo ($arr["id"]); ?>">修改</a></h2>
    </center>

</body>
</html>