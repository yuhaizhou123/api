<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 后台首页模块
 * Class IndexController
 * @package App\Http\Controllers\Admin
 */
class IndexController extends Controller
{
    /**
     * 首页视图展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        return view('Admin.Index.index');
    }
}
