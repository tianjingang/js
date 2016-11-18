<?php
header('content-type:text/html;charset=utf8');
$sort=isset($_GET['sort'])?$_GET['sort']:'';
$order=isset($_GET['order'])?$_GET['order']:'';
require "ri.php";
$db=new DB();
//入库
$sql="insert into cat(sort,online)VALUES ('$sort','$order')";
$res=$db->insert($sql);
if($res){
    echo '<script>alert("添加成功");location.href="list.php"</script>';
}
else{
    echo '<script>alert("添加失败");location.href="form.php"</script>';

}







?>