<?php
//引入类
include("../smarty/smarty/smarty.class.php");
//实例化
$smarty=new Smarty;
//var_dump($smarty);
//模板文件路径
$smarty->template_dir='./templates/';
//编译文件路径
$smarty->compile_dir='./templates_c/';
//缓存文件
$smarty->cache_dir='./cache/';
//配置文件
$smarty->config_dir='./configs/';
//显示模板
$smarty->display('form.html');
?>