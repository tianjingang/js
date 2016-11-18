<?php
include('../smarty/smarty/smarty.class.php');
header('content-type:text/html;charset=utf8');
mysql_connect('127.0.0.1','root','root');
mysql_select_db('test');
mysql_query('set name utf8');
$id=$_GET['id'];
$sql2="select * from ri20 where id='$id'";
$res=mysql_query($sql2);
$list=array();
while($arr=mysql_fetch_assoc($res)) {
    $list[] = $arr;
}
$smarty=new Smarty;
//模板文件路径
$smarty->template_dir='./templates/';
//编译文件路径
$smarty->compile_dir='./templates_c/';
//配置文件
$smarty->config_dir='./configs/';
//缓存文件
$smarty->cache_dir='./cache/';
//传值
$smarty->assign('list',$list);
//显示模板
$smarty->display('look.html');
?>