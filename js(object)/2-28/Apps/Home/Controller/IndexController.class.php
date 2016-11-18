<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

    //添加
    public function add()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './';
        $upload->savePath = './Public/Uploads/'; // 设置附件上传目录    // 上传文件
        $info = $upload->upload($_FILES);
        if (!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        } else {
                foreach($info as $key=>$val){
                    $_POST["$key"]=$val['savepath'].$val['savename'];

                }
            $res = D('Day28')->insert($_POST);
            if ($res) {
                $this->success('添加成功', U('Index/show', 3));
            } else {
                $this->error('添加失败');
            }
        }
    }
    //查询
    public function show(){
        $User=M('Day28');
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
        $res=D('Day28')->delete("id='$id'");
        if($res){
            $this->success('删除成功',U('Index/show',3));
        }
        else{
            $this->error('删除失败');
        }
    }
    //单条查询
    public function show_one(){
        $id=$_GET['id'];
        $arr=D('Day28')->find("id='$id'");
        $this->assign('arr',$arr);
        $this->display('show_one');
    }
    //修改
    public function update(){
        $id=$_POST['id'];
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './';
        $upload->savePath = './Public/Uploads/'; // 设置附件上传目录    // 上传文件
        $info = $upload->upload();
        if (!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        } else {
            foreach($info as $key=>$val){
                $_POST["$key"]=$val['savepath'].$val['savename'];

            }
            $res = D('Day28')->update("id='$id'",$_POST);
            if ($res) {
                $this->success('修改成功', U('Index/show', 3));
            } else {
                $this->error('修改失败');
            }
        }
    }
}