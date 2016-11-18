<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf8");
class LoginController extends Controller {
    public function login(){
        $this->display();
    }
    //检测登陆信息
    function login_check(){
        $username=I('post.username');
        $pwd=I('post.pwd'/*,'','md5'*/);
        $arr=D('login')->look(array("username"=>$username));
        if(!$arr)
        {
            echo "用户名不正确";die;
        }
        if($arr['pwd']== $pwd)
        {
           session('username',$arr['username']);
            session('pwd',$arr['pwd']);
            session('id',$arr['id']);
            $this->redirect('Index/index','',2,'页面跳转中');
        }
    }
    //退出
    function login_out(){
        session(null);
        $this->redirect('Login/login','',2,'页面跳转中');

    }

}