<?php
/*满足单利模式必要的条件
1.私有的成员属性:为了防止在类外引入这个存放对象；
2.私有的构造方法:为了防止在类外使用new关键字实例化对象;
3.私有的克隆方法:为了防止在类外通过clone生成立一个对象;
4:共有的静态方法:为了让用户实例化对象操作；*/
//定义类
class mysqlDB{
    //私有的成员属性:为了防止在类外引入这个存放的对象；
    //返回数据库连接_资源类型；
    private static $link=null;
    //构造方法,是用private封装后只能在类的内部使用new 实例化对象;
    private function __construct(){
        //完成数据库连接及其他初始化操作
        self::$link=mysql_connect('127.0.0.1','root','root')or die ('连接数据库失败:'.mysql_error());
        mysql_select_db('test')or die ('选择数据库失败:'.mysql_error());
        mysql_query('set names utf8');
    }
    //克隆
    //防止在类外通过clone生成另一个对象
    private function __clone(){
        //return self::$link;
    }
    //公有的静态方法:为了让用户进行实例化的操作
    //只有这个方法才能返回类的对象，静态方法，只能用类名调用
    static function getInstance(){
        //判断$db是否有值,如为null,则实例化本类
        if(is_null(self::$link)){
            self::$link=new self();
        }
        //返回$db
        return self::$link;
    }
    //单条查询
    public function look($table,$where=1){
        $sql="select * from $table where $where";
        $res=mysql_query($sql);
        return $res;
    }
    //多条查询
    public function select($table){
        $sql="select * from $table";
        $res=mysql_query($sql);
        return $res;
    }
    //添加
    public  function  add($table,$date){
        $kstr="";
        foreach($date as $k=>$v){
            $kstr.="$k,";
        }
        $kstr=trim($kstr,",");
        $vstr="";
        foreach($date as $k=>$v){
            $vstr.="'$v',";
        }
        $vstr=trim($vstr,",");
        $sql="insert into $table($kstr)VALUES ($vstr)";
        return mysql_query($sql);
    }
    //修改
    public function update($table,$date,$where){
        $datestr="";
        foreach($date as $k=>$v){
            $datestr.="$k='$v'";
        }
        $datestr=trim($datestr,",");
        $sqlstr="update $table set $datestr where $where";
        return mysql_query($sqlstr);
    }
    //删除
    public function delete($table,$where){
        $sqlstr="delete from $table where $where";
        return mysql_query($sqlstr);
    }
}
