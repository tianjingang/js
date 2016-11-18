<?php if (!defined('THINK_PATH')) exit();?><center>
<p><font color="red">欢迎<?php echo (session('username')); ?>登录</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/js(object)/yuekao/index.php/Home/Index/find/">您有<?php echo ($num); ?>条日志未读</a></p>
    <a href="/js(object)/yuekao/index.php/Home/Index/login_out/">退出</a>
<form action="/js(object)/yuekao/index.php/Home/Index/add/" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>今日完成工作</td>
            <td><input type="text" name="daywork"/></td>
        </tr>
        <tr>
            <td>未完成工作</td>
            <td><input type="text" name="message"/></td>
        </tr>
        <tr>
            <td>备注</td>
            <td><?php echo (session('username')); ?></td>
        </tr>
        <tr>
            <td>图片</td>
            <td><input type="file" name="files"/></td>
        </tr>
        <tr>
            <td>接受人</td>
            <td>
                <?php if(is_array($User)): $i = 0; $__LIST__ = $User;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><input type="checkbox" name="friend[]" value="<?php echo ($val["id"]); ?>"/><?php echo ($val["username"]); endforeach; endif; else: echo "" ;endif; ?>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="提交"/></td>
            <td></td>
        </tr>
    </table>
</form>
    </center>