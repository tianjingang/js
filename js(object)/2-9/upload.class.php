<?php

//文件上传类
class Upload{
    private $config=array(
        'rootPath'=>'./uploads/',
        'type'=>array('image/png','image/jpeg','image/gif'),
        'maxsize'=>2//以兆为单位

    );
    //存储错误信息
    private $error;
  public function up($file){
      $name=$_FILES[$file]['name'];
      $type=$_FILES[$file]['type'];
      $tmp_name=$_FILES[$file]['tmp_name'];
      $error=$_FILES[$file]['error'];
      $size=$_FILES[$file]['size'];
//判断文件是否上传成功
      if(!$this->is_ok($error)){
            return false;
      }
      /*if($error!=0){
          $this->error="上传失败 ".$error;
          return false;
      }*/
//判断上传文件是否合法
      if(!$this->checkType($type)){
          return false;
      }
      /*if(!in_array($type,$this->config['type'])){
          $this->error="非法文件";
          return false;
      }*/
//判断上传文件大小1M
      if(!$this->checkSize($size)){
          return false;
      }
      /*if($size>$this->config['maxsize']*1024*1024){
          $this->error="大小超出上传限制s文件大小";
          return false;
      }*/
//创建目录
// $path=$this->config['rootPath'].date('Y').'/'.date('m').'/';
     $path=$this->createPath();
      if($path==false ){
          return false;
      }


     /*if(!file_exists($path)){
          if(mkdir($path,0777,true)==false){
              $this->error= "创建目录失败";
              return false;
          }
      }*/
//重新定义文件名
      $new_name=$this->createName($name);
     /* $stuff=substr($name,strrpos($name,'.'));
      $new_name=time().'_'.rand(1,99999).$stuff;*/
//移动文件
      if(move_uploaded_file($tmp_name,$path.$new_name)){
          return $path.$new_name;
      }
      else{
          $this->error='文件移动失败';
          return false;
      }
  }
    //返回错误信息
   public function getErr(){
       return $this->error;
   }
    //检查文件上传
  private  function is_ok($error){
        if($error != 0){
            $this->error='上传失败 '.$error;
            return false;
        }
        else{
            return true;
        }

    }
    //检查文件类型
   private function checkType($type){
        if(!in_array($type,$this->config['type'])){
            $this->error="非法文件";
            return false;
        }
        return true;

    }
    //检查文件大小
    private function checkSize($size){
        if($size>$this->config['maxsize']*1024*1024){
          $this->error="大小超出上传限制的文件大小";
          return false;
      }
        return true;
    }
    //创建目录
    private function createPath(){
       $path=$this->config['rootPath'].date('Y').'/'.date('m').'/';
        if(!file_exists($path)){
          if(mkdir($path,0777,true)==false){
              $this->error= "创建目录失败";
              return false;
          }
      }
        return $path;
    }
    //重新定义文件名
    private function checkName($name){
        $stuff=substr($name,strrpos($name,'.'));
        $new_name=time().'_'.rand(1,99999).$stuff;
        return $new_name;
    }
}
//移动文件路径
if(move_uploaded_file($tmp_name,$path.$new_name)){
   return true;
}
else{
    return false;
}
?>