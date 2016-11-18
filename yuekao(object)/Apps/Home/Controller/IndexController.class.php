<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        //查询出除登录人外的接收人
        $id=session('id');
        $User=D('Login')->show("id!='$id'");
        $this->assign('User',$User);
       ///查询出登录人的日志未读条数  0未读  1已读
        $res=D('Index')->shows(array('rid'=>$id,'statue'=>0));
        $num=count($res);
        $this->assign('num',$num);
        $this->display();
    }
    //退出
    function login_out(){
        session(null);
        $this->redirect('Login/login','',2,'退出中');
    }
    //发送日志
    function add(){
        $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath='./';
                    $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录    // 上传单个文件
                         $info   =   $upload->uploadOne($_FILES['files']);
        if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
               $files= $info['savepath'].$info['savename'];
        }
        //接值
        $daywork=I('post.daywork');
        $message=I('post.message');
        $sname=session('username');
       $_FILES=$_FILES['files'];
        $friend=I('post.friend');

        //循环出接受人
        foreach($friend as $k=>$v){
            $data=array(
                "daywork"=>$daywork,
                "message"=>$message,
                "sname"=>$sname,
                "files"=>$files,
                "rid"=>$v
            );
            //执行
            $res=D('Index')->add($data);

        }
        if($res){
            $this->success('发送成功');
        }
        else{
            $this->error('发送失败');
        }
    }
    //查看
    function find(){
        $id=session('id');
        $arr1=D('Index')->shows(array('rid'=>$id,'statue'=>0));
        D('Index')->update(array('rid'=>$id),array('statue'=>1));
        $this->assign('arr1',$arr1);
        $this->display();
    }
}