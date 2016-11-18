<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf8");
class IndexController extends CommonController {
    //调用Model层里面的方法
    public function index(){
      $User=D('login')->show();
        $this->assign('User',$User);
        //查询登录人所接收的信息条数   0未读  1 已读
        $id=session('id');
      $arr=D('Index')->look(array('rid'=>$id,'state'=>0));
        //print_r($arr);die;
        $num=count($arr);
        $this->assign('num',$num);
        $this->display();
    }
    public function send(){
        $friend=I('post.friend');
        $message=I('post.message');
        $sname=session('username');
    //先把接收人循环出来
        foreach($friend as $k=>$v){
             $data=array(
                 "message"=>$message,
                 "rid"=>$v,
                 "sname"=>$sname
             );
            $res=D('Index')->insert($data);
        }
        if($res){
            $this->success('发送信息成功');
        }
        else{
            $this->error('发送信息失败');
        }
    }
    public function find(){
          $id=session('id');
         $arr1=D('Index')->shows("state='0' and rid='$id'");
        D('Index')->update(array('rid'=>$id),array('state'=>1));
        $this->assign('arr1',$arr1);
        $this->display();
    }
}