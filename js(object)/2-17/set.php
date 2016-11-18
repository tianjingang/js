<?php
header('content-type:text/html;charset=utf8');
function __autoload($classname){
    if(file_exists($classname.".class.php")){
        include($classname.".class.php");
    }else{
        echo "该类文件不存在";die();
    }
}
$Animals = new Animal;
var_dump($Animals);
$Anima = new Anim;
var_dump($Anima);

/*function __autoload($classname){
    if(file_exists($classname.".class.php")){
        include($classname.".class.php");
    }
    else{
        return '该类文件不存在';die();
    }
}*/

/*$people=new People();
var_dump($people);
echo '<br/>';
$man=new Man;
var_dump($man);*/

/*$Animals = new Animals;
var_dump($Animals);*/




?>