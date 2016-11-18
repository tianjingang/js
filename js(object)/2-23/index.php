<?php
header('content-type:text/html;charset=utf8');
ini_set('display_errors','on');
date_default_timezone_set('PRC');
//入口文件引入控制器类和模型文件类和模板类
require "./Controller/testController.class.php";
require "./Model/DbModel.class.php";
require "./smarty/smarty/Smarty.class.php";
$smarty=new smarty;

/*ini_set('display_errors','on');
	date_default_timezone_set('PRC');*/
//index.php?类名=类名&方法=方法名
//类名 info 随便定义
$info=isset($_GET['info'])?$_GET['info']:'';
//方法名 method
$method=isset($_GET['method'])?$_GET['method']:'';
//如果通过入口文件访问的类和方法名存在，就实例化控制器类;
$obj=new test;
echo $obj->insert();












?>