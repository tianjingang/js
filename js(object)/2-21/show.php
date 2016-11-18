<?php
//引入类
function __autoload($file){
    include_once($file.".class.php");
}
//实例化类
$db=new DB;
$page=new Page;
//查询所有数据
$list=$db->getAll('ri21');
//分页
$count=count($list);
$num_page =3;
$url = 'show.php';
$a = $page->getPage($count,$num_page,$url);
$array = $db->getAll("ri21 $page->limit");
include ('../smarty/smarty/Smarty.class.php');
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
$smarty->assign('list',$array);
$smarty->assign('arr',$a);
//显示模板
$smarty->display('show.html');
?>

