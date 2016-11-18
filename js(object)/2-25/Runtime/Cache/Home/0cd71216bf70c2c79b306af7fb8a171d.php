<?php if (!defined('THINK_PATH')) exit();?><form>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>文件名</td>
            <td>封面</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($val["id"]); ?></td>
            <td><?php echo ($val["filename"]); ?></td>
            <td><img src="/js(object)/2-25<?php echo ($val["photo"]); ?>" alt="" height="60" width="60"/></td>
            <td><a href="/js(object)/2-25/index.php/Home/Index/delete/id/<?php echo ($val["id"]); ?>">删除</a>
                <a href="/js(object)/2-25/index.php/Home/Index/show_one/id/<?php echo ($val["id"]); ?>">修改</a>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</form>
<?php echo ($show); ?>