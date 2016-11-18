<?php
mysql_connect('127.0.0.1','root','root');
mysql_select_db('test');
mysql_query('set name utf8');
$id=$_GET['id'];
$sql2="delete from ri20 where id='$id'";
$res=mysql_query($sql2);
if($res){
    header("location:show.php");
}
?>