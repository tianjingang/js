<?php
namespace Home\Model;
use Think\Model;
class PhotoModel extends Model{
    protected $table='photo';
    //添加
    public function add($data){
        return M($this->table)->add($data);
    }
    //查询单条
    public function look($where){
        return M($this->table)->where($where)->find();
    }
    //查询所有
    public function select(){
        return M($this->table)->select();
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