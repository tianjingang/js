<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
     function __construct(){
         parent::__construct();
         if(!session('?username')){
             $this->redirect('Deng/deng','',3,'请先登录');
         }
     }
}