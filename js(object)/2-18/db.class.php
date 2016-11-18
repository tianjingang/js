<?php
header('content-type:text/html;charset=utf8');
/*error_reporting(E_ALL ^E_DEPRECATED);*/
class DB{
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
    //新增数据
    function insert($sql){
        return $this->query($sql);
    }
//查询数据,二维数组
    function getAll($table){
        $sql="select * from $table";
        $res =$this->query($sql);
        $list=array();
        while($row=mysql_fetch_assoc($res)){
            $list[]=$row;
        }
        return $list;

    }

}
?>