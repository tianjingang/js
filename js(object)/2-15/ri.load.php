<?php
//防乱码
header('content-type:text/html;charset=utf8');
//打印
//var_dump($_FILES);die;
/*<body>array(1) {
  ["img"]=&gt;
  array(5) {
    ["name"]=&gt;
    string(40) "0fc91493259f428c7d01cae1abc21b26_510.jpg"
    ["type"]=&gt;
    string(10) "image/jpeg"
    ["tmp_name"]=&gt;
    string(27) "C:\Windows\Temp\phpF58B.tmp"
    ["error"]=&gt;
    int(0)
    ["size"]=&gt;
    int(52537)
  }
}
</body>*/
//获取所上传的文件各项参数
$name=$_FILES['img']['name'];
$type=$_FILES['img']['type'];
$tmp_name=$_FILES['img']['tmp_name'];
$error=$_FILES['img']['error'];
$size=$_FILES['img']['size'];
//定义文档类型
$config=array(
    'maxsize'=>0,
   'type'=>array('image/gif','image/jpeg','image/png')
);
//判断文件上传
if($error!=0){
    echo '上传失败'.$error;die();

}
//判断文件大小
if($size>1024*1024){
    echo '超出文件限制大小';die();

}
//判断文件类型
if(!in_array($type,$config['type'])){
    echo "非法文件";die();
}
//创建目录
$path='./load/'.date('Y').'/'.date('m').'/';
if(!file_exists($path)){
    if(mkdir($path,0777,true)==false){
        echo '创建目录失败';die();
    }
}
//重新命名文件名字
$stuff=substr($name,strrpos($name,'.'));
$new_name=time().'_'.rand(1,99999).$stuff;
//移动文件路径
if(move_uploaded_file($tmp_name,$path.$new_name)){
    echo 'ok';
}
else{
    echo 'fail';
}






?>