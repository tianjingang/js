<?php

/*row         (当前层数*2)-1         层数-当前层数
层数        每层的星星       空格
 1               1             2
 2               3             1
 3               5

   *
  * *
 * * *   */
$row=5;
function JinZiTa($row){
    for($i=1;$i <= $row;$i++){
    //循环空格
    for($k=1;$k<=$row-$i;$k++){
        echo '&nbsp;';

    }
    //循环输出*
    for($j=1;$j<=($i*2)-1;$j++){
        echo "*";
    }
    echo '<br>';

}
}
JinZiTa(10);



?>