<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class IndexController extends CommonController {
    public function index(){
        //调用M层里的方法查询出除登录人之外的用户名
        $id=session('id');
        $User=D('Login')->show("id!='$id'");
        $this->assign('User',$User);
        //查询登录人所获得的信息条数
        $arr=D('Index')->look(array('rid'=>$id,'statue'=>0));
        $num=count($arr);
        $this->assign('num',$num);
        $this->display();
    }
    //退出登录
    function login_out(){
        session(null);
        $this->redirect('Index/login','',2,'退出中');
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
            $res=D('Index')->add($data);
        }
        if($res){
            $this->success('发送成功');
        }
        else{
            $this->error('发送失败');
        }
    }
    //查看信息
    public function find(){
        $id=session('id');
        $arr1=D('Index')->shows(array('rid'=>$id,'statue'=>0));
        D('Index')->update(array('rid'=>$id),array('statue'=>1));
        $this->assign('arr1',$arr1);
        $this->display();
    }
}