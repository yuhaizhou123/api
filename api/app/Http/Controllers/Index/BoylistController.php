<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 男生小说视图展示
 * Class BoylistController
 * @package App\Http\Controllers\Index
 *
 */
class BoylistController extends Controller
{
    /**
     * 展示男生小说视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function boylist(){
        return view('Index.boylist.boylist');
    }
}
