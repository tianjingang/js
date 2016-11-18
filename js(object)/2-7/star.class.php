<?php
class star{
   public $row;
    function __construct($row){
      $this->row=$row;
    }
    function pstar(){
        $row=$this->row;
        for($i=1;$i <= $row;$i++){
            //循环空格
            $this->printNbsp($row-$i);
            /*for($k=1;$k<=$this->row-$i;$k++){
                echo '&nbsp;';
            }*/
            //循环输出*
            $this->printstar(($i*2)-1);
            /*for($j=1;$j<=($i*2)-1;$j++){
                echo "*";
            }*/
            echo '<br>';

        }
    }
    //输出空格
    function printNbsp($num){
        for($k=1;$k<=$num;$k++){
                  echo '&nbsp;';
        }
    }
    //输出*
    function printstart($num){
        for($j=1;$j<=$num;$j++){
            echo "*";
        }
    }
}
$sp1=new star(10);
$sp1->pstar();