<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf8');
class IndexController extends Controller {
    public function index(){
        $this->display('deng');
    }
    public function login_in(){
        $this->display('add');
    }
    //显示模板
    public function Deng(){
        $this->display('deng');
    }
    //验证用户名，密码
    public function login_check(){
        $username=I('post.username');
        $pwd=I('post.pwd');
        $arr=D('deng')->look(array('username'=>$username));
        if(!$arr) die('用户名不存在');
        if($arr['pwd']!=$pwd) die('密码错误');
        session('username',$username);
        session('pwd',$pwd);
        $this->redirect('Index/login_in', '', 5, '页面跳转中...');

    }
    //图片添加
    public function add()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './';
        $upload->savePath = './Public/upload/'; // 设置附件上传目录    // 上传文件
        $info = $upload->upload($_FILES);
        //  var_dump($info);die;
        if (!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        } else {

            foreach($info as $key=>$val){
                $_POST["$key"]=$val['savepath'].$val['savename'];

            }
            $res = D('photo')->add($_POST);
            if ($res) {
                $this->success('添加成功', U('Index/show', 3));
            } else {
                $this->error('添加失败');
            }
        }
    }
    //查询所有
    public function show(){
        $User=M('photo');
        $count=$User->count();
        $Page=new \Think\Page($count,3);
        $show=$Page->show();
        $arr=$User->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('arr',$arr);
        $this->assign('show',$show);
        $this->display('show');
    }
    //删除
    public function delete(){
        $id=$_GET['id'];
        $res=D('photo')->delete("id='$id'");
        if($res){
            $this->success('删除成功',U('index/show'));
        }
        else{
            $this->error('删除失败');
        }
    }
    //修改1
    public function show_one(){
        $id=$_GET['id'];
        $arr=D('photo')->look("id='$id'");
        $this->assign('arr',$arr);
        $this->display('show_one');
    }
    //修改2
    public function update(){
        $id=$_POST['id'];
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './';
        $upload->savePath = '/Public/upload/'; // 设置附件上传目录    // 上传文件
        $info = $upload->upload($_FILES);
        //var_dump($info);die;
        if (!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        } else {

            foreach($info as $key=>$val){
                $_POST["$key"]=$val['savepath'].$val['savename'];

            }
           // print_r($_POST);die;
            $res = D('photo')->update("id='$id'",$_POST);
            if ($res) {
                $this->success('修改成功',U('Index/show'));
            } else {
                $this->error('修改失败');
            }
        }

    }
}