<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    //添加
    public function add(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath='./';
        $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录    // 上传文件

        $info   =   $upload->upload($_FILES);
        if(!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            // 上传成功
            foreach($info as $key=>$value)
            {
                $_POST["$key"] = $value['savepath'].$value['savename'];
            }
          //调用Model层方法
            $res=D('Upload')->add($_POST);
            if($res){
                $this->success('上传成功',U('Index/show',3));
            }
            else{
                $this->error('上传失败');
            }

        }
    }
    //查询
    public function show(){
        $User=M('Upload');
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
        $res=D('Upload')->del("id='$id'");
        if($res){
            $this->success('ok',U('Index/show'));
        }
        else{
            $this->error('NO');
        }
    }

    //单条查询
    public function show_one(){
        $id=$_GET['id'];
        $arr=D('Upload')->find("id='$id'");
        $this->assign('arr',$arr);
        $this->display('show_one');
    }
    //修改
    public function update(){
        $id = $_POST['id'];
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        //创建根目录
        $upload->rootPath = './';
        $upload->savePath  =      '/Public/Uploads/'; // 设置附件上传目录    // 上传单个文件
        $info   =   $upload->upload();
        if(!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
    }else{
            foreach($info as $key=>$value)
            {
                $_POST["$key"] = $value['savepath'].$value['savename'];
            }

            $res=D('Upload')->update("id='$id'",$_POST);
            if($res){
                $this->success('ok',U('Index/show'));
            }
            else{
                $this->error('NO');
            }
        }
    }

}