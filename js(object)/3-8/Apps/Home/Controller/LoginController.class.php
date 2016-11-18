<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        $this->display();
    }
    //检测用户名，密码。接值
    public function login_check(){
        //接值
        $username=I('post.username');
        $pwd=I('post.pwd');
        //调用Model层查询登录表的用户
        $arr=D('login')->look(array('username'=>$username));
        if(!$arr) die('用户名不存在');
        if($arr['pwd']==$pwd){
            //存入session
            session('username',$arr['username']);
            session('pwd',$arr['pwd']);
            session('id',$arr['id']);
            $this->redirect('Index/index','',2,'正在登录中');
        }
    }
}