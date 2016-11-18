<?php
//model处理数据业务     例如实例化数据库类
class Db{
    //构造方法
    function __construct(){
        mysql_connect('127.0.0.1','root','root');
        mysql_select_db('test');
        mysql_query('set names utf8');
    }
    //添加
    function add($table,$date){
        $key='';
        $values='';
        foreach($date as $k=>$v){
            $key=$key.$k.',';
            $values=$values."'$v',";
        }
        $key=trim($key,',');
        $values=trim($values,',');
        $sql="insert into $table($key)VALUES ($values)";
        return mysql_query($sql);
    }
    //查询
    function select(){
        $sql="select * from ri24";
        //echo $sql;die;
        $res=mysql_query($sql);
        $list=array();
        while($row=mysql_fetch_assoc($res)){
            $list[]=$row;
        }
        return $list;
    }

}






?>