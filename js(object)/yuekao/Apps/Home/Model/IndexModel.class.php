<?php
namespace Home\Model;
use Think\Model;
header('content-type:text/html;charset=utf8');
class IndexModel extends Model{
    protected $table='Index';
    //添加
    public function add($data){
        return M($this->table)->add($data);
    }

    //多查
    public function shows($where){
        return M($this->table)->where($where)->select();
    }
    //删除
    public function delete($where){
        return M($this->table)->where($where)->delete();
    }
    //修改
    public function update($where,$data){
        return M($this->table)->where($where)->save($data);
    }
}