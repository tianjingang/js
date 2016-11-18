<?php
namespace Home\Model;
use Think\Model;
class UploadModel extends Model {
    protected $table='Upload';
    //添加
    public function add($date){
        return M($this->table)->add($date);
        
    }
    //查询
    public function select(){
        return M($this->table)->select();
    }
    //删除
    public function del($where){
        return M($this->table)->where($where)->delete();
    }
    //单条查询
    public function find($where){
        return M($this->table)->where($where)->find();
    }
    //修改
    public function update($where,$date){
        return M($this->table)->where($where)->save($date);

    }
}








?>