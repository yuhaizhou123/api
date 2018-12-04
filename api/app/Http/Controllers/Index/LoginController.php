<?php

namespace App\Http\Controllers\Index;

use App\Model\Index\LoginModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    /**
     * 登录展示视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function login(){
        return view('Index.login.login');
    }
    /**
     * 执行登录
     */
    public function login_do(){
        $arr=Input::post();
        $where=[
            'user_phone'=>$arr['username']
        ];
        $login_model=new LoginModel();
        //先查看有没有此用户名
        $login_info=$login_model->userFind($where);
        if($login_info){
            return 1;
        }else{
            return 2;
        }
    }}
