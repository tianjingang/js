<?php
namespace Home\Model;
use Think\Model;
header('content-type:text/html;charset=utf8');
class LoginModel extends Model{
    protected $table='Login';
    //单条查询
    public function look($where){
        return M($this->table)->where($where)->find();

    }
    //多条查询
    public function show($where){
        return  M($this->table)->where($where)->select();

    }
}