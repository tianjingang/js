<?php
require "cnwel.class.php";
$cn=new CnWel();
$cn->wel();
$res=serialize($cn);
file_put_contents('obj.txt',$res);
var_dump($res);
?>