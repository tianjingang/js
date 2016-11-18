<?php
header('content-type:text/html;charset=utf8');
require "db.class.php";
$db=new DB();
empty($_POST['username'])?$username="":$username=$_POST['username'];
empty($_POST['pwd'])?$pwd="":$pwd=$_POST['pwd'];
$res=$db->deng('deng',"username='$username'","pwd","$pwd");
if($res){
    setcookie('u_name',$username);
    header('location:show.php');
}
else{
    echo "权限不够";
    header('refresh:2;url=deng.php');
}
?>