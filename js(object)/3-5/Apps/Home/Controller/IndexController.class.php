<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class IndexController extends Controller {
    //显示登陆模板
    public function index(){
        $this->display();
    }
    //验证登陆
    public function login(){
        //通过I接值
        $username=I('post.username');
        $pwd=I('post.pwd');
        //调用M层look方法查询
        $arr=D('login')->look(array('username'=>$username));
        if(!$arr)die('用户名不存在');
        if($arr['pwd']==$pwd){
            session('username',$username);
            $this->success('欢迎登陆',U('Index/show'));
        }
        else{
            $this->error('登陆失败');
        }
    }
    //展示页面
    public function show(){
        $username=array('username'=>session('username'));
        $count=M('message')->where($username)->count();
        $this->assign('names',session('username'));
        if($count){
            $this->assign('count',0);
            $this->display();
        }
        else{
            $this->assign('count',$count);
            $this->display();
        }
    }
       //退出登陆
    function out(){
        session_destroy();
        $this->display('index');
    }
    //个人相册显示
    public function photoshow(){
        $id=session('id');
        $User=M('Photo');
        $count      = $User->where("n_id='$id'")->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where("n_id='$id'")->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('arr',$list);// 赋值数据集$this->assign('page',$show);// 赋值分页输出$this->display(); // 输出模板
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    //跳转到上传相片页面
    public function photoshow_upload(){
        $this->display();
    }

    //图片上传处理
    public function photoupload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './';
        $upload->savePath  =      '/Public/Uploads/'; // 设置附件上传目录    // 上传文件
        $info   =   $upload->uploadOne($_FILES['photopath']);
        if(!$info) {
            $this->error($upload->getError());
        }else{// 上传成功
            $_POST['photopath']=$info['savepath'].$info['savename'];
            $_POST['n_id']=session('id');
            $res = M('Photo')->add($_POST);
            if($res){
                $this->success('上传成功',U('Index/photoshow'));
            }else{
                $this->success('上传失败');
            }
        }
    }
    //图片删除
    public function photodel(){
        $id  = $_GET['id'];
        $arr= array('id'=>$id);
        $res = M('Photo')->where($arr)->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    //个人信息
    public function user(){
        $id=session('id');
        $arr=array('id'=>$id);
        $res = M('Login')->where($arr)->find();
        $this->assign('arr',$res);
        $this->display();
    }

    //信息修改
    public function usershow(){
        $username=session('username');
        $arr = array('username'=>$username);
        $res = M('Login')->where($arr)->find();
        $this->assign('arr',$res);
        $this->display();
    }

    //发送消息页面
    public function message_show(){
        $res = M('Login')->select();
        $this->assign('arr',$res);
        $this->display();
    }

    //消息入库
    public function message_add(){
        $_POST['user']=session('username');
        //print_r($_POST);die;
        $res = M('message')->add($_POST);

        if($res){
            $this->success('发送成功');
        }else{
            $this->error('发送失败');
        }
    }

    //消息查看
    public function message_look(){
        $ar = array('username'=>session('username'));
        $res = M('message')->where($ar)->select();
        $this->assign('arr',$res);
        $this->display();
    }
}