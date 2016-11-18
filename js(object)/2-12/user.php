<?php
require "cnwel.class.php";
$res=file_get_contents('obj.txt');
$obj=unserialize($res);
$obj->wel();
?>