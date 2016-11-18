<?php
//定义个和文件名一样的类
//处理器的作用:调用M层数据,将数据传到V层实现
class test{
    //添加
    function insert(){
        $obj=new Db();
        $date=array('r_username'=>'张淼','r_pwd'=>'zhangmiao');
        if($obj->add('ri24',$date)){
           $this->select();
        }
    }
    //查询
    function select(){
        $obj=new Db();
        $list=$obj->select();
        $smarty=new Smarty;
        $smarty->template_dir='./View/';
        $smarty->compile_dir='./templates_c/';
        $smarty->assign('list',$list);
        $smarty->display('show.html');
    }
    //修改
    function update(){
        echo "update";
    }
}





?>