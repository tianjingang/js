<?php
header('content-type:text/html;charset=utf8');
//var_dump($_FILES);die;
/*array(1) {
  ["img"]=&gt;
  array(5) {
    ["name"]=&gt;
    string(40) "1_0f7ab73fca3b2c8b649567b630e0b3fc_0.jpg"
    ["type"]=&gt;
    string(10) "image/jpeg"
    ["tmp_name"]=&gt;
    string(27) "C:\Windows\Temp\phpD48F.tmp"
    ["error"]=&gt;
    int(0)
    ["size"]=&gt;
    int(38174)
  }
}*/
$name=$_FILES['img']['name'];
$type=$_FILES['img']['type'];
$tmp_name=$_FILES['img']['tmp_name'];
$error=$_FILES['img']['error'];
$size=$_FILES['img']['size'];
//文件的类型
$config=array(
    'maxsize'=>0,
    'type'=>array('image/png','image/jpeg','image/gif')

);
//判断文件是否上传成功
if($error!=0){
    echo "上传失败 ".$error;die();
}
//判断上传文件是否合法
if(!in_array($type,$config['type'])){
    echo "非法文件";die();
}
//判断上传文件大小1M
if($size>1024*1024){
    echo "大小超出上传限制s文件大小";die();
}
//创建目录
$path='./uploads/'.date('Y').'/'.date('m').'/';
if(!file_exists($path)){
    if(mkdir($path,0777,true)==false){
        echo "创建目录失败";die();
    }
}
//重新定义文件名
$stuff=substr($name,strrpos($name,'.'));
$new_name=time().'_'.rand(1,99999).$stuff;
//移动文件
if(move_uploaded_file($tmp_name,$path.$new_name)){
    echo "ok";
}
else{
    echo "fail";
}






?>