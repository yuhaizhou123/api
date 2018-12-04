<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 充值视图展示模块
 * Class PayController
 * @package App\Http\Controllers\Index
 */
class PayController extends Controller
{
    /**
     * 展示充值视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function pay(){
        return view('Index.pay.pay');
    }
    /**
     * 充值界面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function payment(){
        return view('Index.pay.payment');
    }
}
