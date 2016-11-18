<?php
header('content-type:text/html;charset=utf8');
//接值
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$id=$_POST['id'];
//连库
mysql_connect('127.0.0.1','root','root');
mysql_select_db('test');
mysql_query('set name utf8');
//修改
$sql="update ri20 set r_username='$username' ,r_pwd='$pwd' where id='$id'";
$res=mysql_query($sql);
if($res){
    header("refresh:1;show.php");
}
?>