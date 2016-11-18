<?php
header('content-type:text/html;charset=utf8');
require "upload.class.php";
require "ri.php";
$up=new upload;
$ri=new DB;
$path=$_FILES['file']['tmp_name'];
$o_path='uploads/'.$_FILES['file']['name'];
foreach($_FILES as $key=>$val){
    if($path=$up->up('$key')){
        //入库
        $now=time();
        $sql="insert into images(filename,add_time)VALUES ('o_path','$now')";
        $res=$db->insert($sql);
        if($res){
            echo 'ok';
        }
        else{
            echo 'fail';
        }

    }
    else{
        echo $up->getErr();
    }

}
