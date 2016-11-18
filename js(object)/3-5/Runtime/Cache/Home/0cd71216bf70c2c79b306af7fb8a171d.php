<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>展示页面</title>
</head>
<body>
<h2><font color="blue">欢迎<?php echo ($names); ?>登陆</font></h2><a href="/js(object)/3-5/index.php/Home/Index/message_look/">消息(<?php echo ($count); ?>)</a>
<p><a href="/js(object)/3-5/index.php/Home/Index/photoshow/">私人相册</a></p>
<p><a href="/js(object)/3-5/index.php/Home/Index/photoshow_upload/">上传相册</a></p>
<p><a href="/js(object)/3-5/index.php/Home/Index/user/">编辑个人信息</a></p>
<p><a href="/js(object)/3-5/index.php/Home/Index/message_show/">发送消息</a></p>
<p><a href="/js(object)/3-5/index.php/Home/Index/out/">退出登录</a></p>

</body>
</html>