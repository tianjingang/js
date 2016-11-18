<?php
namespace Home\Model;
use Think\Model;
class IndexModel extends Model{
    protected $table='Index';
    //添加
    public function insert($data){
        return M($this->table)->add($data);
    }
    //单条查询
    public function look($where){
        return M($this->table)
            ->where($where)
            ->select();
    }
    //查询所有
    public function show($where){
        return M($this->table)->where($where)->select();
    }
    //修改
    public function update($where,$data){
        return M($this->table)->where($where)->save($data);
    }
}