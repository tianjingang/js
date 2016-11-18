<?php
class Upload{
    public function up($filename){
        $f_name = $filename['name'];
        $f_type = $filename['type'];
        $f_tmp = $filename['tmp_name'];
        $f_error = $filename['error'];
        $f_size = $filename['size'];
        //判断错误代码
        if($f_error != 0){
            die('上传失败');
        }

        //判断文件类型
        $type = array('image/jpeg','image/png','image/gif','image/jpg');
        if(!in_array($f_type,$type)){
            echo "文件类型错误";die;
        }

          //判断文件大小
        if($f_size>1024*1024*2){
            echo "文件过大";die;
        }

        //判断文件目录是否存在
        $path = './Upload/'.date('Y').'/'.date('m').'/'.date('d').'/';
        if(!file_exists($path)){
            //对文件目录是否 创建成功进行判断。
            if(!mkdir($path,0777,true)){
                echo '文件目录创建失败';die;
            }
        }

        //将文件移动到指定目录文件当中
        //修改文件名称
        $new_name = time().rand(0,9999999999).substr($f_name,strrpos($f_name,'.'));
        if(move_uploaded_file($f_tmp,$path.$new_name)){
            return $path.$new_name;
        }else{
            return false;
        }

    }
}







?>