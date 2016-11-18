<?php
header('content-type:text/html;charset=utf8');
//面向对象的方法
abstract class welcome{
    abstract function wel();
}
//中国
class CnWel extends welcome{
    function wel(){
        echo "欢迎来中国访问";
    }
}
?>