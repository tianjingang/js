<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>展示</title>
</head>
<body>
<table border="1">
    <tr>
        <td>编号</td>
        <td>图片名字</td>
        <td>图片</td>
        <td>操作</td>
    </tr>
    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($val["id"]); ?></td>
        <td><?php echo ($val["photoname"]); ?></td>
        <td><img src="/js(object)/3-5<?php echo ($val["photopath"]); ?>" alt="" width="200"/></td>
        <td><a href="/js(object)/3-5/index.php/Home/Index/photodel/id/<?php echo ($val["id"]); ?>">删除</a></td>
    </tr>
        <tr>
            <td><?php echo ($page); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<p><a href="/js(object)/3-5/index.php/Home/Index/show/">返回主页面</a></p>
</body>
</html>