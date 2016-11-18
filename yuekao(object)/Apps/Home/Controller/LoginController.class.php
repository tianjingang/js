<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class LoginController extends Controller{
    function login(){
        $this->display();
    }
    //验证用户名密码
    function login_check(){
        //接值
        $username=I('post.username');
        $pwd=I('post.pwd');
        //调用登录Model层look方法
        $arr=D('Login')->look(array('username'=>$username));
    if(!$arr) die('用户名不存在');
        if($arr['pwd']==$pwd){
            //存session值
            session('username',$arr['username']);
            session('pwd',$arr['pwd']);
            session('id',$arr['id']);
            $this->redirect('Index/index','',2,'登录中');
        }
        else{
            $this->error('密码错误');
        }
    }
}