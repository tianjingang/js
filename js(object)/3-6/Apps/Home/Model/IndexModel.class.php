<?php
namespace Home\Model;
use Think\Model;
class IndexModel extends Model{
    protected $table='Index';
    public function insert($data){
        return M($this->table)->add($data);
    }
    public function look($where){
        return M($this->table)
            ->join('Login on Index.rid=Login.id','left')
            ->where($where)
        ->select();
    }
    public function shows($where){
        return M($this->table)->where($where)->select();
    }
    public function update($where,$data){
        return M($this->table)->where($where)->save($data);
    }

}