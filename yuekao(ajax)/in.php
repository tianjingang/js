<?php
//设置防乱码
//接值
//连接数据库
//编写执行语句实现入库
//入库结果给出提示
header('content-type:text/html;charset=utf8');
//接值
$tilte=$_POST['title'];
$type=$_POST['type'];
$content=$_POST['content'];
$date=date('Y-m-d h:i:s',time());
//var_dump($_POST);die;
//连库
$link=mysqli_connect("127.0.0.1","root","root","cms201601_tianjingang");
mysqli_query($link,'set names utf8');
//语句
$sql="insert into zt_news_cate(z_type,z_title,z_time)VALUES ('$type','$tilte','$date')";
$re=mysqli_query($link,$sql);
if($re){
    echo "成功";
    header('refresh:1;url=show.php');
}
else{
    echo "失败";
    header('refresh:1;url=yue.php');
}





?>