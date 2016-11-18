<?php
header('content-type:text/html;charset=utf8');
//引入类
require "db.class.php";
if(!empty($_COOKIE['u_name'])){
    echo "欢迎".$_COOKIE['u_name']." 登录";
}else{
    echo "<script>alert('非法访问');location.href='deng.php'</script>";
}
//实例化
$db=new DB;
$res=$db->getAll('ri23');
$list=array();
while($row=mysql_fetch_assoc($res)){
    $list[]=$row;
}
include("../smarty/smarty/smarty.class.php");
//实例化
$smarty=new Smarty;
//模板文件路径
$smarty->template_dir='./templates/';
//编译文件路径
$smarty->compile_dir='./templates_c/';
//缓存文件
$smarty->cache_dir='./cache/';
//配置文件
$smarty->config_dir='./configs/';
//传值
$smarty->assign('list',$list);
//显示模板
$smarty->display('show.html');
?>