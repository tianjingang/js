<?php
header('content-type:text/html;charset=utf8');
/*
1.连接数据库
2.选择数据库
3.设置字符集
4.添加数据
5,查询数据二维数组
6.查询数据一维数组
*/

class DB{
    /*属性定义*/
    public $host;
    public $user;
    public $pwd;
    public $conn;
    public $db;
    public $char;
    /*构造函数*/
    function __construct(){
        $cfg=require "./config.php";

        //$cfg=require("./config.php");
        $this->host=$cfg['host'];
        $this->user=$cfg['root'];
        $this->pwd=$cfg['pwd'];
        $this->db=$cfg['db'];
        $this->char=$cfg['char'];
        /*连库*/

        $this->connect();

        /*选择数据库*/
        $this->selectDB();

        /*设置字符集*/
        $this->setChar();

    }
    /*连接数据库*/
    function connect(){
        $this->conn=mysql_query($this->host,$this->user,$this->pwd);

    }
    /*选择数据库*/
    function selectDB(){
  //问题在此处
        mysql_select_db($this->db);
//
    }
    /*设定字符集*/
    function setChar(){
        $sql='set names '.$this->char;
       $this-> mysql_query($sql);
    }
    /*执行sql语句*/
    function query($sql){
        return mysql_query($sql,$this->conn);
    }
    /*查询二维数组*/
    function getAll($sql){
       $res= $this->query($sql);
        $list=array();
        while($row=mysql_fetch_assoc($res)){
            $list[]=$row;
        }
        return $list;
    }

}
/*$db=new DB();
var_dump($db);
$sql="insert into tablename(username,sex,pwd,age)VALUES ('张三','男','00000','11')";
$res=$db->query($sql);
var_dump($res);
$sql="select * from tablename";
$list=$db->getAll($sql);
var_dump($list);*/