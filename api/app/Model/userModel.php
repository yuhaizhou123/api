<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table='content';
    public $timestamps=false;
    //添加
    public function userAdd($arr){
        return $this->insertGetId($arr);
    }
    //查询全部数据
    public function userList(){
        return $this->get()->toArray();
    }
    //根据条件查询单条
    public function userFind($where){
        return $this->where($where)->first()->toArray();
    }
    //删除一条数据
    public function userDel($where){
        return $this->where($where)->delete();
    }
    //根据条件更新数据
    public function userSave($where,$arr){
        return $this->where($where)->update($arr);
    }
}