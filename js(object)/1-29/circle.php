<?php
header('content-type:text/html;charset=utf8');
/*定义一个类*/
class OldPeople{
    /*定义成员属性*/
    public $name='张三';
    public $sex;
    public $age;
    public $height;
    /*定义成员方法*/
    function __construct($username){
        //echo "雅玛黑雅玛黑"."<br>";
        $this->name=$username;
    }
    function Eat(){
        echo "吃得不够好，再来";
    }
    function  Sleep(){
        echo "睡觉睡觉睡觉睡觉";

    }
    function __destruct(){
        echo "呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵";

    }
}
/*类的实例化*/
$wangwu=new  OldPeople('王五');
$zhaoliu=new  OldPeople('赵六');
echo $wangwu->name;
echo "<br/>";
echo $zhaoliu->name;
echo "<br/>";
echo $zhaoliu->Eat();
echo "<br/>";
class Circle{
    /*定义类对象*/
    public $r;
    /*定义类方法*/
    function Gets($r){
        return 3.14*$r*$r;
    }
    function  Getl($r){
        return 3.14*2*$r;

    }

}
/*实例化*/
$circle = new Circle();
echo $circle->Gets(10);
echo "<br/>";
echo $circle->Getl(10);
echo "<br/>";
?>