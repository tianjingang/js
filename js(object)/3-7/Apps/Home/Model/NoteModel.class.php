<?php
namespace Home\Model;
use Think\Model;
class NoteModel extends Model{
    protected $table='Note';
    public function add($data){
        return M($this->table)->add($data);
    }
    public function look($where){
        return M($this->table)
            ->where($where)
            ->select();
    }
    public function show($where){
        return M($this->table)->where($where)->select();
    }
    public function delete($where){
        return M($this->table)->where($where)->delete();
    }
    public function update($where,$data){
        return M($this->table)->where($where)->save($data);
    }
}