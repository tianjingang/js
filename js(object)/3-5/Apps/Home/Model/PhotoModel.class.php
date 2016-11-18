<?php
namespace Home\Model;
use Think\Model;
class PhotoModel extends Model{
    protected $table='photo';
    //单条查询
    public function look($where){
        return M($this->table)->where($where)->find();
    }
    //单条带条件查询
    public function show($where){
        return M($this->table)->where($where)->select();
    }
}








?>