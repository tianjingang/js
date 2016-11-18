<?php if (!defined('THINK_PATH')) exit();?><form action="/js(object)/2-28/index.php/Home/Index/show/" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>ID</td>
            <td>图片1</td>
            <td>图片2</td>
            <td>图片3</td>
            <td>图片4</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($val["id"]); ?></td>
            <td><img src="/js(object)/2-28<?php echo ($val["photo1"]); ?>" alt="" width="80" height="80"/></td>
            <td><img src="/js(object)/2-28<?php echo ($val["photo2"]); ?>" alt="" width="80" height="80"/></td>
            <td><img src="/js(object)/2-28<?php echo ($val["photo3"]); ?>" alt="" width="80" height="80"/></td>
            <td><img src="/js(object)/2-28<?php echo ($val["photo4"]); ?>" alt="" width="80" height="80"/></td>
            <td><a href="/js(object)/2-28/index.php/Home/Index/delete/id/<?php echo ($val["id"]); ?>">删除</a>
                <a href="/js(object)/2-28/index.php/Home/Index/show_one/id/<?php echo ($val["id"]); ?>">修改</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</form>
<?php echo ($show); ?>