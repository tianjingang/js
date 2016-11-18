<?php
header('content-type:text/html;charset=utf8');
$cat=$_GET['cat'];
if($cat=='小白'){
    $name='小白';
    $age='1';
    $color='白色';
    echo $name.'今年'.$age.'岁'.'颜色是'.$color;
}
elseif($cat=='小花'){
    $name='小花';
    $age='2';
    $color='花色';
    echo $name.'今年'.$age.'岁'.'颜色是'.$color;
}
else{
    echo "张太太没有这只猫";
}