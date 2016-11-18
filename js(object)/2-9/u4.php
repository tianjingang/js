<?php
header('content-type:text/html;charset=utf8');
require "u3.php";
require "db.class.php";
$up=new Upload();
$db=new DB;
foreach($_FILES as $key=>$val){
if($path=$up->up($val)){
    //入库
    $now=time();
    $sql="insert into img(file,add_time)VALUES ('$path','$now')";
    $res=$db->insert($sql);
    if($res){
        echo "ok";
    }
    else{
        echo "fail";
    }
}
else{
    echo $up->getErr();
}
}






?>