<?php
header('content-type:text/html;charset=utf8');
//引入类
require "db.class.php";
require "upload.class.php";
//实例化
$db=new DB;
$up=new upload();
//接值
$startdate=$_POST['startdate'];
$overdate=$_POST['overdate'];
$day=$_POST['day'];
$why=$_POST['why'];
$filesname=$_FILES['files'];
$path=$up->up($filesname);
$person=$_POST['person'];
$key="r_startdate,r_overdate,r_day,r_why,r_files,r_person";
$value="'$startdate','$overdate','$day','$why','$path','$person'";
$res=$db->insert('ri23',$key,$value);
//语句
if($res){
    echo "添加成功";
    //header('location:show.php');
}
else{
    echo "fail";
    //header('location:form.html');

}
?>