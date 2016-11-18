<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016/2/23
 * Time: 8:24
 */
header('content-type:text/html;charset=utf8');
//引入类
require "mysqlDB.class.php";
//实例化
$db=mysqlDB::getInstance();
$res=$db->select('danli');
?>
<table border="1">
    <tr>
        <td>用户名</td>
        <td>密码</td>
    </tr>
  <?php while($arr=mysql_fetch_assoc($res)){ ?>
    <tr>
        <td><?php echo $arr['username'];?></td>
        <td><?php echo $arr['pwd']?></td>
    </tr>
 <?php } ?>
</table>

