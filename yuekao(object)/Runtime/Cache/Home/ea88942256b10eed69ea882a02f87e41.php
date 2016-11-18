<?php if (!defined('THINK_PATH')) exit();?><form>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>今日完成工作</td>
            <td>未完成工作</td>
            <td>图片</td>
           <td>发送人</td>
        </tr>
        <?php if(is_array($arr1)): $i = 0; $__LIST__ = $arr1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($val["id"]); ?></td>
            <td><?php echo ($val["daywork"]); ?></td>
            <td><?php echo ($val["message"]); ?></td>
            <td><img src="/js(object)/yuekao/<?php echo ($val["files"]); ?>" alt="" height="80" width="80"/></td>
            <td><?php echo ($val["sname"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
    <a href="/js(object)/yuekao/index.php/Home/Index/index">返回</a>
</form>