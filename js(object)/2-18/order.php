<?php
header('content-type:text/html;charset=utf8');
class Order{
    public function Eat(){
        echo '吃饭暑假';
    }
}
//实例化对象
$obj = new Order();
//序列化
$ser=serialize($obj);
var_dump($ser);
echo '<br/>';
//反序列化
$seri=unserialize($ser);
var_dump($seri);






?>