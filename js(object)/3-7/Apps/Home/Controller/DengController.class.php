<?php
namespace Home\Controller;
use Think\Controller;
class DengController extends Controller{
    public function deng(){
        $this->display('login');
    }
    //检测登录信息
    public function deng_check(){
        //接值
        $username=I('post.username');
        $pwd=I('post.pwd');
        //调用Model层查询出用户名，密码
        $arr=D('Deng')->look(array('username'=>$username));
        if(!$arr) die('用户名不存在');
        if($arr['pwd']==$pwd){
            session('username',$arr['username']);
            session('pwd',$arr['pwd']);
            session('id',$arr['id']);
            $this->redirect('Index/index','',1,'页面跳转中');
        }
    }
}
