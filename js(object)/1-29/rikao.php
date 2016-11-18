<?php
header('content-type:text/html;charset=utf8');
class DB{
    //成员属性
    public $DBname;
    public $username;
    public $password;
    public $datebase;
 //通过构造函数连接数据库
    public function __construct($DBname, $username, $password, $datebase)
    {
        $this->DBname = $DBname;
        $this->username = $username;
        $this->password = $password;
        $this->datebase = $datebase;
        mysql_connect("$this->DBname","$this->username","$this->password");
        mysql_select_db("$this->datebase");
        mysql_query('set names utf8');
    }
    //添加语句
    public function add($tablename,$first,$second){
        $sql="insert into ".$tablename."(".$first.")values(".$second.")";
        $re=mysql_query($sql);
        return $re;
    }
}
//调用数据库
$db=new DB("127.0.0.1","root","root","test");
//类的实例化
$str="username,sex,pwd,age";
$str1="'张三','男',1234,'24'";
$rs=$db->add('tablename',$str,"$str1");
if($rs){
    echo "添加成功";
}
else{
    echo "添加失败";
}

?>