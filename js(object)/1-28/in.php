<?php
header('content-type:text/html;charset=utf8');
//接值
$c_name=$_POST['c_name'];
$c_price=$_POST['c_price'];
$box=$_POST['box'];
$c_teacher=$_POST['c_teacher'];
//print_r($_POST);die;
//连库
$link=mysqli_connect("127.0.0.1","root","root","test");
mysqli_query($link,'set names utf8');
//添加语句
$sql="insert into ri28(c_name,c_price,c_load,c_teacher) VALUES ('$c_name','$c_price','$box','$c_teacher')";
$re=mysqli_query($link,$sql);
if($re){
    echo "添加成功";
    header('refresh:1;url=show.php');
}
else{
    echo "添加失败";
    header('refresh:1;url=form.php');
}



?>