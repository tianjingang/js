<?php
namespace Home\Model;
use Think\Model;
class LoginModel extends Model{
    protected $table='login';
    //单条查询
    public function look($where){
        return M($this->table)->where($where)->find();
    }
    //单条带条件
    public function select($where){
        return M($this->table)->where($where)->select();
    }
}