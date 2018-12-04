<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 女生小说展示视图
 * Class ManlistController
 * @package App\Http\Controllers\Index
 */
class ManlistController extends Controller
{
    /**
     * 展示女生小说视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\Viewzz
     */
    public function manlist(){
        return view('Index.man.man');
    }
}
