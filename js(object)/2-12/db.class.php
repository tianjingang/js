<?php
/*1.连库
  2.选库
  3.设置字符集
  4.编写sql语句
  5.进行添加操作
  6.查询所有数据
  7.查询单条数据
  8.删除
  9.修改
*/
   class DB{
       public $host;
       public $user;
       public $pwd;
       public $dbname;
       public $charset;
       //构造方法
       function __construct(){
           $this->host='127.0.0.1';
           $this->user='root';
           $this->pwd='root';
           mysql_connect($this->host,$this->user,$this->pwd);
           mysql_select_db($this->dbname);
           mysql_query($this->charset);
       }
   }




?>