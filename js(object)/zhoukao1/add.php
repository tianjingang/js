<?php
$goodname=isset($_POST['goodname'])?$_POST['goodname']:'';
$type=isset($_POST['type'])?$_POST['type']:'';
$price=isset($_POST['price'])?$_POST['price']:'';
$number=isset($_POST['number'])?$_POST['number']:'';
$statue=isset($_POST['statue'])?$_POST['statue']:'';
require "goods.class.php";
$db=new DB();
$sql="insert into goods(g_name,g_type,g_price,g_number,g_statue)VALUES ('$goodname','$type','$price','$number','$statue')";
$res=$db->insert($sql);
if($res){
    echo "ok";
    header('refresh:1;url=show.php');

}
else{
    echo 'fail';
    header('refresh:1;url=form1.php');
}





?>