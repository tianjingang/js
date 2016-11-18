<?php
$length=isset($_GET['length'])?$_GET['length']:'';
$width=isset($_GET['width'])?$_GET['width']:'';
/*定义类*/
class Box{
    /*定义对象*/
    public $length;
    public $width;
    /*定义方法*/
    function Getl($length,$width){
        return 2*($length+$width);
    }
    function  Gets($length,$width){
        return $length*$width;
    }

}
      /*实例化对象*/
      $box=new Box();
      echo "周长:".$box->Getl($length,$width);
      echo "面积:". $box->Gets($length,$width);
?>