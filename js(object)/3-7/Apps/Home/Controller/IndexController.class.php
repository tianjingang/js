<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $id=session('id');
    //调用登录Model层里的shows方法,查询出除登录人外的所有用户
    $User=D('Deng')->shows("id!='$id'");
    $this->assign('User',$User);
    //查询登录人所获得的信息条数  0未读    1 已读
        $arr=D('Note')->look(array('rid'=>$id,'statue'=>0));
        $num=count($arr);
        $this->assign('num',$num);
        $this->display();
}
    //退出登陆
    public function deng_out(){
        session(null);
        $this->redirect('Deng/login','',2,'页面跳转中');
    }
    //发送信息
    public function add(){
        //先接值
        $friend=I('post.friend');
        $message=I('post.message');
        $sname=session('username');
        //再把接收人循环出来
        foreach($friend as $k=>$v){
            $data=array(
                "message"=>$message,
                "rid"=>$v,
                "sname"=>$sname
            );
            //执行
            $res=D('Note')->add($data);
        }

        if($res){
            $this->success('发送成功');
        }
        else{
            $this->error('发送失败');
        }
    }
    //查看
    public function find(){
        $id=session('id');
        $arr1=D('Note')->show(array('statue'=>0,'rid'=>$id));
        D('Note')->update(array('rid'=>$id),array('statue'=>1));
        $this->assign('arr1',$arr1);
        $this->display();
    }




}