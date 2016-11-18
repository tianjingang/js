<?php
header('content-type:text/html;charset=utf8');
class UserModel{
    private $table='user';
    private $data=array();
    function __set($key,$val){
      $this->data[$key]=$val;
    }
    function add(){
        $sql="insert into ".$this->table;
        $sql.="(".implode(',',array_keys($this->data));
        $sql.=")values('";
        $sql.=implode("','",array_values($this->data));
        $sql.='\')';
        echo $sql;
    }
}





?>