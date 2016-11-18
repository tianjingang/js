<?php
header('content-type:text/html;charset=utf8');
//接值
$id=$_POST['id'];
$filename=$_POST['filename'];
$files=$_FILES['files'];
include("upload.class.php");
$Up=new Upload;
$path=$Up->up($files);
//连库
mysql_connect('127.0.0.1','root','root');
mysql_select_db('test');
mysql_query('set name utf8');
//修改
$sql="update ri21 set r_filename='$filename',r_files='$path' where id='$id'";
$res=mysql_query($sql);
if($res){
    echo "修改成功";
    header("location:show.php");

}
?>