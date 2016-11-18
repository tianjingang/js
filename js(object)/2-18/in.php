<?php
header('content-type:text/html;charset=utf8');
require "db.class.php";
require "upload.class.php";
$db=new DB();
$up=new Upload();
$files=$_FILES['filename'];
$path=$up->up($files);
$name=$_POST['name'];
$addman=$_POST['addman'];
$sql="insert into ri18 (r_filename,r_name,r_addman)VALUES ('$path','$name','$addman')";
$res=$db->insert($sql);
if($res){
    echo '成功';
    header('refresh:2;url=show.php');
}
else{
    echo '失败';
    header('refresh:2;url=form.php');

}







?>