<?php
header('content-type:text/html;charset=utf8');

class Human{
    public $name='小明';
     protected $age='30';
     private $money='xxx';
    function __clone(){
    echo "有人克隆我";
}
    function __GET($param){
       echo '你在访问我的'.$param.'<br/>';
    }
    function __set($p,$v){
        echo '你在设置我的'.$p,'值为'.$v;
        $this->$p=$v;

    }
    function __ISSET($param){
        echo '你在判断我的'.$param;
        echo "<br/>";
        return true;
    }
    function show(){
        echo __CLASS__;
        echo "<br/>";
        echo __FUNCTION__;
    }
}
//clone 魔术方法
$h1=new Human();
/*var_dump($h1);
echo '<br/>';
$h2=clone $h1;
var_dump($h2);*/
//get 魔术方法
/*echo $h1->age;
echo $h1->money;
echo $h1->xyz;*/
//var_dump($h1);
//echo '<br/>';
//set 魔术方法
/*echo $h1->age='18';
echo $h1->money='9999';
echo $h1->yyy='xxx';
echo '<br/>';*/
//isset魔术方法
var_dump(isset($h1->money));
echo "<br/>";
var_dump(isset($h1->aaaa));
echo "<br/>";
echo $h1->show();
echo "<br/>";
var_dump($h1);








?>