<?php
namespace Home\Model;
use Think\Model;
class ImagesModel extends Model {
    protected $table='images';
    //添加
    public function insert($date){
        return M($this->table)->add($date);

    }
    //查询
    public function look(){
        return M($this->table)->select();
    }
    //删除
    public function delete($where){
        return M($this->table)->where($where)->delete();

    }
    //查询单条数据
    public function find($where){
        return M($this->table)->where($where)->find();

    }
    //修改
    public function update($where,$date){
        return M($this->table)->where($where)->save($date);

    }
}





?>