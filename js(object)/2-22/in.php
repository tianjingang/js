<?php
header('content-type:text/html;charset=utf8');
//引入类
require "mysqlDB.class.php";
//实例化
$db=mysqlDB::getInstance();
//接值
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$res=$db->add('danli',$_POST);
if($res)
{
    echo "OK";
    header("refresh:1;show.php");
}
else
{
    echo "NO";
}



