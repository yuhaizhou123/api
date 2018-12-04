<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 前台首页模块
 * Class IndexController
 * @package App\Http\Controllers\Index
 */
class IndexController extends Controller
{
    /**
     * 首页模板展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        return view('Index.index.index');
    }
}
