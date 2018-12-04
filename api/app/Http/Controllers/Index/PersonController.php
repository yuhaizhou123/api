<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 个人模块
 * Class PersonController
 * @package App\Http\Controllers\Index
 */
class PersonController extends Controller
{
    /**
     * 展示个人视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function person(){
        return view('Index.person.person');
    }
}
