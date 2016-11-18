<?php
namespace Home\Model;
use Think\Model;
class Day29Model extends Model{
    protected $table="Day29";
    //添加
    public function insert($data){
        return M($this->table)->add($data);
    }
    //查询
    public function select(){
        return M($this->table)->select();
    }
    //删除
    public function delete($where){
        return M($this->table)->where($where)->delete();
    }
    //单条查询
    public function find($where){
        return M($this->table)->where($where)->find();
    }
    //修改
    public function update($where,$data){
        return M($this->table)->where($where)->save($data);
    }
}





?>