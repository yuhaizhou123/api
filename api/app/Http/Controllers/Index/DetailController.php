<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 详情页模块
 * Class DetailController
 * @package App\Http\Controllers\Index
 */
class DetailController extends Controller
{
    /**
     * 展示详情页视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function detail(){
        return view('Index.detail.detail');
    }
}
