<?php
include('ri.class.php');
$p1=new Base;
$res = $p1->select("goods");
?>
<table>
    <tr>
        <td>名字</td>
        <td>类型</td>
        <td>价格</td>
        <td>数量</td>
        <td>状态</td>
    </tr>
    <?php while($arr = mysql_fetch_assoc($res)){?>
        <tr>
            <td><?php echo $arr['g_name'];?></td>
            <td><?php echo $arr['g_type'];?></td>
            <td><?php echo $arr['g_price'];?></td>
            <td><?php echo $arr['g_number'];?></td>
            <td><?php echo $arr['g_statue'];?></td>
        </tr>
    <?php } ?>
</table>





