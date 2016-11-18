<?php
header('content-type:text/html;charset=utf8');
//连库
$link=mysqli_connect("127.0.0.1","root","root","test");
mysqli_query($link,'set names utf8');
//语句
$id=$_GET['id'];
$sql="delete from ri28 where id='$id'";
$re=mysqli_query($link,$sql);
if($re){
    echo "删除成功";
    header('refresh:1;url=show.php');
}
else{
    echo "删除失败";
    header('refresh:1;url=show.php');
}






?>