<?php
header('content-type:text/html;charset=utf8');
class Animal{
    public $name='zhangsan';
    protected $age=30;
    private $salary='666666666666';
    /*function __get($param){
        echo '你访问的值是'.$param;

    }
    function __set($name,$value){
        echo '你访问的属性是'.$name.'值是'.$value;
    }
    function __isset($param){
        echo '你访问的属性是'.$param;
    }*/
    private function Eat(){
        echo '中午没吃饭';
    }
    /*function __clone(){
        echo '你被克隆了';
    }*/
    function __call($param,$value){
        echo '你获取的方法是'.$param.'值为'.$value;
    }
}
//$people->age;
//$people->sex='男';
//echo isset($people->money);
/*$new_people=clone $people;

?>