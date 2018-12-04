<?php

namespace App\Http\Controllers\Index;

use App\Model\Index\MessageModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

/**
 * 注册模块
 * Class RegController
 * @package App\Http\Controllers\Index
 */
class RegController extends Controller
{
    /**
     * 展示注册视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function reg()
    {
        return view('Index.reg.reg');
    }
    //发送手机验证码
    public function reg_code(){
        $phone=Input::post('phone');
        $code=code();
        $arr=[
            'msg_phone'=>$phone,
            'msg_val'=>$code,
            'msg_ctime'=>time()
        ];
        $msg_model=new MessageModel();
        $res1=$msg_model->msgAdd($arr);
        $res2=send_tel($phone,$code);
        if($res1&&$res2){
            return 1;
        }else{
            return '失败';
        }
    }
}