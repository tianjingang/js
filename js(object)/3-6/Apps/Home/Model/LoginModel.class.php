<?php
namespace Home\Model;
use Think\Model;
class LoginModel extends Model {
    protected $table='login';
    public function look($where){
        return M($this->table)->where($where)->find();
    }
    public function show(){
        $id=session('id');
        return M($this->table)->where("id!='$id'")->select();
    }
}