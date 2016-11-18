<?php
require "db.class.php";
$cat=isset($_POST['cat'])?$_POST['cat']:'';
$sort=isset($_POST['sort'])?$_POST['sort']:'';
$sql="insert into cats (cat,sort)VALUES ('$cat','$sort')";
$db=new DB();
//die($sql);
$re=$db->insert($sql);
if($re){
     echo "<script>alert('ok');location.href='list.php'</script>";
 }
else{
    echo "<script>alert('fail');location.href='add.html'</script>";
}








?>