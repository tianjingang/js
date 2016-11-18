<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>消息查看</title>
</head>
<body>

    <table align="center">
<?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($val["user"]); ?></td>
            <td><?php echo ($val["content"]); ?></td>
            <td><a href="/js(object)/3-5/index.php/Home/Index/message_show/">回复</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
<a href="/js(object)/3-5/index.php/Home/Index/show/">返回</a>
</body>
</html>