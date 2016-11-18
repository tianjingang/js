<?php
header('content-type:text/html;charset=utf8');
//连库
$link=mysqli_connect("127.0.0.1","root","root","test");
mysqli_query($link,'set names utf8');
//语句
$id=$_GET['id'];
$sql="select * from ri28 where id='$id'";
$re=mysqli_query($link,$sql);
$arr=mysqli_fetch_assoc($re);
?>
<form action="xiu1.php" method="post">
    <input type="hidden" name="id" value="<?php echo $arr['id']?>"/>
    <h1>课程修改</h1>
    <table border="1">
        <tr>
            <td>课程名称</td>
            <td><input type="text" name="c_name" value="<?php echo $arr['c_name']?>"/></td>
        </tr>
        <tr>
            <td>课程价格</td>
            <td><input type="text" name="c_price" value="<?php echo $arr['c_price']?>"/></td>
        </tr>
        <tr>
            <td>是否连载</td>
            <td>
                    <input type="radio" name="box"  <?php if($arr['c_load']==0){echo "checked";}?>>是
                    <input type="radio" name="box"    <?php if($arr['c_load']==1){echo "checked";}?>>否
            </td>
        </tr>
        <tr>
            <td>该课程讲师</td>
            <td><input type="text" name="c_teacher" value="<?php echo $arr['c_teacher']?>"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="修改"/></td>
        </tr>
    </table>
</form>