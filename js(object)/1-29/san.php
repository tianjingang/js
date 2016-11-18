<?php
header('content-type:text/html;charset=utf8');
$bian=isset($_GET['bian'])?$_GET['bian']:'';
$height=isset($_GET['height'])?$_GET['height']:'';

class San{
    /*定义对象*/
    public $bian;
    public $height;
    /*定义方法*/
    function getL($bian){
        return 3*$bian;
    }
    function  getS($bian,$height){
        return 0.5*($bian*$height);
    }

}
      /*实例化*/
      $san = new San();
      echo "周长:".$san->getL($bian);
      echo "面积:".$san->getS($bian,$height);

?>