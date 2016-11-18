<?php
header('content-type:text/html;charset=utf8');
//接值
$username=$_POST['username'];
$pwd=$_POST['pwd'];
//连库
mysql_connect('127.0.0.1','root','root');
mysql_select_db('test');
mysql_query('set name utf8');
//添加
$sql="insert into ri20 (r_username,r_pwd)VALUES ('$username','$pwd')";
$res=mysql_query($sql);
if($res){
    header("refresh:1;show.php");
}
?>