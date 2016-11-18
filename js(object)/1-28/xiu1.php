<?php
header('content-type:text/html;charset=utf8');
//连库
$link=mysqli_connect("127.0.0.1","root","root","test");
mysqli_query($link,'set names utf8');
//接值
$c_name=$_POST['c_name'];
$c_price=$_POST['c_price'];
$box=$_POST['box'];
$c_teacher=$_POST['c_teacher'];
//语句
$id=$_POST['id'];
$sql="update ri28 set c_name='$c_name',c_price='$c_price',c_load='$box',c_teacher='$c_teacher' where id='$id'";
$re=mysqli_query($link,$sql);
if($re){
    echo "修改成功";
    header('refresh:1;url=show.php');
}
else{
    echo "修改失败";
    header('refresh:1;url=show.php');
}







?>