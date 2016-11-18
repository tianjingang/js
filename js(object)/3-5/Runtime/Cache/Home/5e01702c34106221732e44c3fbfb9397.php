<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发送消息</title>
</head>
<body>
<form action="/js(object)/3-5/index.php/Home/Index/message_add/" method="post">
    <table border="1">
        <tr>
            <td>选择联系人</td>
            <td>
                <select name="username">
                    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["username"]); ?>"><?php echo ($val["username"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>发送的内容</td>
            <td><textarea rows="5" cols="10" name="content"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="发送"/></td>
            <td></td>
        </tr>
    </table>
    <a href="/js(object)/3-5/index.php/Home/Index/show/">返回</a>
</form>

</body>
</html>