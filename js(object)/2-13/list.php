<?php
require "db.class.php";
$db=new DB();
$sql="select * from cats";
$res=$db->getAll($sql);
?>
<table border="1">
    <tr>
        <td>分类</td>
        <td>排序</td>
    </tr>
    <?php while($arr=mysql_fetch_assoc($res)){?>
    <tr>
        <td><?php echo $arr['cat']?></td>
        <td><?php echo $arr['sort']?></td>
    </tr>
    <?php } ?>
</table>