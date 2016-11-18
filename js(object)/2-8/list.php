<?php
header('content-type:text/html;charset=utf8');
require "ri.php";
$db=new DB();
//查询
$sql="select * from cat order by online desc";
$list=$db->getAll($sql);
?>
<table border="1">
    <tr>
        <td>ID</td>
        <td>分类名</td>
        <td>排序</td>
    </tr>
    <?php foreach($list as $val){?>
    <tr>
        <td><?php echo $val['id']?></td>
        <td><?php echo $val['sort']?></td>
        <td><?php echo $val['online']?></td>
    </tr>
    <?php }?>
</table>