<?php if (!defined('THINK_PATH')) exit();?><center>
   <p>欢迎<?php echo (session('username')); ?>登录&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/js(object)/3-7/index.php/Home/Index/find">您有<?php echo ($num); ?>条信息</a></p>
    <a href="/js(object)/3-7/index.php/Home/Index/deng_out/">退出</a>
    <form action="/js(object)/3-7/index.php/Home/Index/add/" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>接收人</td>
                <td>
                <?php if(is_array($User)): $i = 0; $__LIST__ = $User;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><input type="checkbox" name="friend[]" value="<?php echo ($val["id"]); ?>"/><?php echo ($val["username"]); endforeach; endif; else: echo "" ;endif; ?>
                </td>
            </tr>
            <tr>
                <td>发送内容</td>
                <td><textarea rows="5" cols="30" name="message"></textarea></td>
            </tr>
            <tr>
                <td>发送人</td>
                <td><?php echo (session('username')); ?></td>
            </tr>
            <tr>
                <td><input type="submit" value="发送"/></td>
                <td></td>
            </tr>
        </table>
    </form>
</center>