<?php
header('content-type:text/html;charset=utf8');
interface DB{
    function find($table,$where);
    function select($table);
    function delete($table,$where);
}
class Base implements DB{
    public $host;
    public $user;
    public $pwd;
    public $link;
    function __construct(){
        $this ->host='127.0.0.1';
        $this->user='root';
        $this->pwd='root';
        $this->db='test';
        //连接数据库
        $this->link = mysql_connect($this->host,$this->user,$this->pwd);
        //选择数据库
        $sql='use '.$this->db;
        $this->query($sql);
        //设置字符集
        $sql='set names utf8';
        $this->query($sql);
    }
    function query($sql){
        return mysql_query($sql,$this->link);
    }
    function find($table,$where){
        $sql="select * from $table where id='$where'";
        $res=mysql_query($sql);
        return $res;
    }
    function select($table){
        $sql="select * from $table";
        $res=mysql_query($sql);
        return $res;
    }
    function delete($table,$where){
        $sql="delete from $table where id='$where'";
        $res=mysql_query($sql);
        return $res;
    }
}
?>