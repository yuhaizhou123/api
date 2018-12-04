<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 分类模块
 * Class CategoryController
 * @package App\Http\Controllers\Index
 */
class CategoryController extends Controller
{
    /**
     * 展示分页视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function category(){
        return view('Index.category.category');
    }
}
