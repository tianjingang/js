<?php
require "ri.class.php";
$filename=$_FILES['filename'];
$up=new Upload();
if($up->up($filename)){
    echo '成功';
}
else{
    echo '失败';
}









?>