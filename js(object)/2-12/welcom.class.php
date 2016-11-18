<?php
header('content-type:text/html;charset=utf8');
//面向过程的方法欢迎页
/*$c=$_GET['c'];
if($c=='china'){
    echo "你好，欢迎你";
}
elseif($c=='english'){
    echo "hello,nice to meet you";
}
elseif($c=='japan'){
    echo "xiaoriben";
}*/
//面向对象的方法
abstract class welcome{
    abstract function wel();
}
//中国
class CnWelcome extends welcome{
    function wel(){
        echo "欢迎来中国访问";
    }
}
//日本
class JapanWelcome extends welcome{
    function wel(){
        echo "xxxxxxx";
    }
}
//英国
class Ewelcome extends welcome{
    function wel(){
        echo "nice too meet you";
    }
}
//实例化对象
$cn=new CnWelcome;
$cn->wel();
?>