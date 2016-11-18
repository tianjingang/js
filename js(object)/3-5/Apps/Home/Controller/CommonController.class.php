<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
    function __construct(){
        parent::__construct();
        if(!session('?username')){

            $this->redirect('Index/login','','跳转中,请稍后');
        }
    }
}