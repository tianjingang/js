<?php

include('ri.class.php');
$p1=new Base;
$res = $p1->delete("goods",8);
if($res){
    echo '删除成功';
}
else{
    echo '删除失败';
}

?>








