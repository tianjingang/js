<?php if (!defined('THINK_PATH')) exit();?><center><font color="aqua">欢迎<?php echo (session('username')); ?>登陆</font>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Index/find');?>"><font color="red">您有<?php echo ($num); ?>条信息</font></a>
    <form action="/js(object)/3-6/index.php/Home/Index/send/" method="post">
        <table>
            <tr>
                <td>接收人</td>
                <td>
                    <?php if(is_array($User)): $i = 0; $__LIST__ = $User;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><input type="checkbox" name="friend[]" value="<?php echo ($val["id"]); ?>"/>
                        <?php echo ($val["username"]); endforeach; endif; else: echo "" ;endif; ?>
                </td>
            </tr>
            <tr>
                <a href="<?php echo U('Login/login_out');?>"><font color="red">退出</font></a>
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
                <td></td>
                <td><input type="submit" value="发送"/></td>
            </tr>
        </table>
    </form>

</center>