<?php
header('content-type:text/html;charset=utf8');
class Upload{
    public function up($filename){
        $name=$filename['name'];
        $type=$filename['type'];
        $tmp_name=$filename['tmp_name'];
        $error=$filename['error'];
        $size=$filename['size'];

/*//获取各项参数
$name=$_FILES['filename']['name'];
$type=$_FILES['filename']['type'];
$tmp_name=$_FILES['filename']['tmp_name'];
$error=$_FILES['filename']['error'];
$size=$_FILES['filename']['size'];*/
//文件类型
$config=array(
    'maxsize'=>0,
    'type'=>array('image/jpeg','image/png','image/gif','image/jpg')
);
//判断错误
if($error!=0){
    echo '上传失败';die;
}
//判断大小
if($size>1024*1024){
    echo '大小超出限制';die;
}

//判断类型
if(!in_array($type,$config['type'])){
    echo '类型不符合';die;

}
//创建目录
$path='./up/'.date('Y').date('m').date('d').'/';
if(!file_exists($path)){
    if(!mkdir($path,0777,true)){
        echo '创建目录失败';die;
        return false;
    }
}
//重命名文件名
$new_name=time().'_'.rand(1,99999).substr($name,strrpos($name,'.'));
//移动文件路径
if(!move_uploaded_file($tmp_name,$path.$new_name)){
    return false;
    /*echo '上传成功';*/
}
else{
    return true;
   /* echo '上传失败';*/
}
    }
}





?>