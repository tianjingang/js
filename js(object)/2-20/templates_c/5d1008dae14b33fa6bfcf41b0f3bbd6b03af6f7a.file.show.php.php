<?php /* Smarty version Smarty-3.1.18, created on 2016-02-20 06:34:22
         compiled from "show.php" */ ?>
<?php /*%%SmartyHeaderCode:3067156c808eee8dc98-24612496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d1008dae14b33fa6bfcf41b0f3bbd6b03af6f7a' => 
    array (
      0 => 'show.php',
      1 => 1455949800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3067156c808eee8dc98-24612496',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56c808eeebee00_71029340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c808eeebee00_71029340')) {function content_56c808eeebee00_71029340($_smarty_tpl) {?><<?php ?>?php
include('../smarty/smarty/smarty.class.php');
mysql_connect('127.0.0.1','root','root');
mysql_select_db('test');
mysql_query('set name utf8');
$sql2="select * from ri20";
$res=mysql_query($sql2);
$list=array();
while($array=mysql_fetch_assoc($res)){
    $list[]=$array;
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
$smarty->display('show.html');








?<?php ?>><?php }} ?>
