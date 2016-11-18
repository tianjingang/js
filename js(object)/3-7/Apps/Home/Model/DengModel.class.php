<?php
namespace Home\Model;
use Think\Model;
class DengModel extends Model{
    protected $table='Deng';
    public function look($where){
        return M($this->table)->where($where)->find();
    }
    public function shows($where){
        return M($this->table)-> where($where)->select();
    }

}