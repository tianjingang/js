<?php
$search=isset($_GET['search'])?$_GET['search']:'';
require "goods.class.php";
$db=new DB();
$sql='select * from goods';
$list=$db->getAll($sql);
?>
<input type="search" placeholder="商品名" value="<?php echo $search?>" name="search" />
<table border="1">
    <tr>
        <td>商品名</td>
        <td>单价</td>
        <td>库存</td>
        <td>分类</td>
        <td>状态</td>
    </tr>
    <?php foreach($list as $val){?>
    <tr>
        <td><?php echo $val['g_name']?></td>
        <td><?php echo $val['g_price']?></td>
        <td><?php echo $val['g_number']?></td>
        <td><?php echo $val['g_type']?></td>
        <td><?php echo $val['g_statue']?></td>
    </tr>
    <?php }?>
</table>
    <div>

