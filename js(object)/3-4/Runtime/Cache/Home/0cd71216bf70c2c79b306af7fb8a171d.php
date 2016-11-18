<?php if (!defined('THINK_PATH')) exit();?><center>
<table border="1">
    <tr>
        <td>图片1</td>
        <td>图片2</td>
        <td>图片3</td>
        <td>联系人</td>
        <td>操作</td>
    </tr>
    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
        <td><img src="/js(object)/3-4<?php echo ($val["photo1"]); ?>" alt="" width="80" height="80"/></td>
        <td><img src="/js(object)/3-4<?php echo ($val["photo2"]); ?>" alt="" width="80" height="80"/></td>
        <td><img src="/js(object)/3-4<?php echo ($val["photo3"]); ?>" alt="" width="80" height="80"/></td>
        <td><?php echo ($val["sender"]); ?></td>
        <td><a href="/js(object)/3-4/index.php/Home/Index/delete/id/<?php echo ($val["id"]); ?>">删除</a>
        <a href="/js(object)/3-4/index.php/Home/Index/show_one/id/<?php echo ($val["id"]); ?>">修改</a>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
    <?php echo ($show); ?>
    </center>