<?php
header('content-type:text/html;charset=utf8');
//连库
$link=mysqli_connect("127.0.0.1","root","root","test");
mysqli_query($link,'set names utf8');
//语句
$sql="select * from ri28";
$re=mysqli_query($link,$sql);
?>
<table border="1">
    <tr>
        <td>序号</td>
        <td>课程名称</td>
        <td>课程价格</td>
        <td>是否连载</td>
        <td>课程讲师</td>
        <td>操作</td>
    </tr>
    <?php while($arr=mysqli_fetch_assoc($re)){?>
    <tr>
        <td><?php echo $arr['id']?></td>
        <td><?php echo $arr['c_name']?></td>
        <td><?php echo $arr['c_price']?></td>
        <?php if($arr['c_load']==1){?>
            <td><?php echo "完成"?></td>
      <?php }else{?>
            <td><?php echo "连载中"?></td>
        <?php }?>

        <td><?php echo $arr['c_teacher']?></td>
        <td><a href="shan.php?id=<?php echo $arr['id']?>">删除</a>
        <a href="xiu.php?id=<?php echo $arr['id']?>">修改</a>
        </td>
    </tr>
    <?php }?>
</table>