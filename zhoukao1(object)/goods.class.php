<?php
//防乱码
header('content-type:text/html;charset=utf8');
//定义类
class DB{
    //定义属性
    public $host;
    public $user;
    public $pwd;
    public $link;
    //构造方法
    function __construct(){
        $this->host='127.0.0.1';
        $this->user='root';
        $this->pwd='root';
        $this->db='test';
        //连接库
        $this->link=mysql_connect($this->host,$this->user,$this->pwd);
        //选择库
        $sql='use '.$this->db;
        $this->query($sql);
        //字符集
        $sql='set names utf8';
        $this->query($sql);

    }
    //执行语句
    function query($sql){
        return mysql_query($sql,$this->link);
    }
    //添加语句
    function insert($sql){
        return $this->query($sql);

    }
    //查询语句
    function getAll($sql){
        $res=$this->query($sql);
        $list=array();
        while($row=mysql_fetch_assoc($res)){
            $list[]=$row;
        }
        return $list;
    }

}








?>