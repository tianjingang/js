<?php
header('content-type:text/html;charset=utf8');
interface Animal{
    function eat();
    function sleep();
    function run();
}
interface Monkey{
    function think();
}
  class Human implements Animal,Monkey
 {
    function eat(){
        echo "eating";
    }
      function sleep(){
          echo "sleeping";
      }
      function run(){
          echo "runing";
      }
      function think(){
          echo "I am thinking";
      }
}
$p=new Human();
var_dump($p);
?>