<?php
//引入类
require "db.class.php";
require "upload.class.php";
//实例化类
$db=new DB();
$up=new Upload();
//接值
$filename=$_POST['filename'];
$filesname=$_FILES['files'];
$path=$up->up($filesname);
//编写语句
$sql="insert into ri21(r_filename,r_files)VALUES ('$filename','$path')";
$res=$db->insert($sql);
if($res){
    header('location:show.php');
}
else{
    header('location:form.html');
}
?>