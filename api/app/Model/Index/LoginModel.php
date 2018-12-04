<?php

namespace App\Model\Index;

use Illuminate\Database\Eloquent\Model;

/**
 * 用户表model模块
 * Class LoginModel
 * @package App\Model\Index
 */
class LoginModel extends Model
{
    protected $table='api_user';
    public  $timestamp=false;


    /**
     * 根据条件查询数据
     * @param $where
     * @return mixed
     */
    public function userList($where){
       return $this->where($where)->get()->toArray();
    }
    /**
     * 根据条件查询单条
     * @param $where
     * @return mixed
     */
    public function userFind($where){
        return $this->where($where)->first()->toArray();
    }
}
