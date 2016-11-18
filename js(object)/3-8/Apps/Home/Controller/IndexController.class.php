<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController{
    public function index(){
        //调用Model层里的方法查询出除登录人以外的其他用户
        $id=session('id');
        $User=D('login')->shows("id!='$id'");
        $this->assign('User',$User);
        //查询登录人所获得信息条数
        $arr=D('Index')->look(array('rid'=>$id,'statue'=>0));
        $num=count($arr);
        $this->assign('num',$num);
        $this->display();
    }
    //退出登录
    public function login_out(){
        session(null);
        $this->redirect('Index/login','',2,'正在重新登录');
    }
    //发送消息
    public function add(){
        //接值
        $friend=I('post.friend');
        $message=I('post.message');
        $sname=session('username');
        //把接收人循环出来
        foreach($friend as $k=>$v){
            $data=array(
                "message"=>$message,
                "rid"=>$v,
                "sname"=>$sname
            );
            $res=D('Index')->insert($data);
        }
        if($res){
            $this->success('发送成功');
        }
        else{
            $this->error('发送失败');
        }
    }
    //查看消息
    public function find(){
        $id=session('id');
        $arr1=D('Index')->show(array('rid'=>$id,'statue'=>0));
        D('Index')->update(array('rid'=>$id),array('statue'=>1));
        $this->assign('arr1',$arr1);
        $this->display();
    }
}