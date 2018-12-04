<?php

namespace App\Model\Index;

use Illuminate\Database\Eloquent\Model;

/**
 * 手机短信验证码模块
 * Class MessageModel
 * @package App\Model\Index
 */
class MessageModel extends Model
{
    protected $table="api_message";
    public $timestamps=false;

    public function msgAdd($arr){
        return $this->insertGetId($arr);
    }
}
