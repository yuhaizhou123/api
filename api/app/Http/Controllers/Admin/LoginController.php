<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

/**
 * 后台登录模块
 * Class LoginController
 * @package App\Http\Controllers\Admin
 */
class LoginController extends Controller
{
    /**
     * 后台登录展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function login(){
        return view('Admin.Login.login');
    }
}
