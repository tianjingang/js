<?php
    header('content-type:text/html;charset=utf8');
	include('upload.class.php');
	$files = $_FILES['filename'];
	$filename = new Upload;
	if($filename->up($files)){
        echo "上传成功";
    }else{
        echo "no";
    }
?>