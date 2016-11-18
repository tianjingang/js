<?php
header('content-type:text/html;charset=utf8');
class Animal{
    function cry(){
        echo "经典黑白放大机恢复健康的符号";
    }

}
class Cat extends Animal{
    
    function cry(){
        echo '喵喵';
        parent::cry();
    }
}

class Pig extends Animal{
    function cry(){
        echo '哼哼';
    }
}
class Dog extends Animal{
    function cry(){
        echo '旺旺';
    }
}
$cat=new Cat();
$cat->cry();



?>