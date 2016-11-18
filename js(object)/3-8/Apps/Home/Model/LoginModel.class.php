<?php
namespace Home\Model;
use Think\Model;
class LoginModel extends Model{
    protected $table='Login';
    //单条查询
    public function look($where){
        return M($this->table)->where($where)->find();
    }
    //全部查询
    public function shows($where){
        return M($this->table)->where($where)->select();
    }
}