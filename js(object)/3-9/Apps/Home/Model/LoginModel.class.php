<?php
namespace Home\Model;
use Think\Model;
class LoginModel extends Model{
    protected $table='Login';
    //单条查询
    public function look($where){
        return M($this->table)->where($where)->find();
    }
    //查询所有
    public function show($where){
        return M($this->table)->where($where)->select();
    }
}