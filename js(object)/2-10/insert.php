<?php
header('content-type:text/html;charset=utf8');
require "useModel.class.php";
$user=new UserModel();
$user->name=$_POST['name'];
$user->email=$_POST['email'];
$user->add();
?>