<?php

namespace App\Http\Controllers;
use App\Exceptions\CodeController;
use App\Model\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Think\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 首页  （获取全部数据）
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_model=new userModel();
        $data=$user_model->userList();
        $data=getMsg(CodeController::SUCCESS_CODE,CodeController::SUCCESS_CODE_MSG,$data);
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     * 创建添加表单
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.user');
    }

    /**
     * Store a newly created resource in storage.
     * 添加一条信息
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr['content']=$request->input('content');
        $user_model=new userModel();
        try{
            $user_model->userAdd($arr);
            return getMsg(CodeController::SUCCESS_CODE,CodeController::SUCCESS_CODE_MSG);
        }catch (\Exception $e){
            return getMsg(CodeController::ERROR_CODE,$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     * 获取单条信息
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $where=[
            'id'=>$id
        ];
        $user_model=new userModel();
        try{
        $data=$user_model->userFind($where);
        return  getMsg(CodeController::SUCCESS_CODE,CodeController::SUCCESS_CODE_MSG,$data);
        }catch (\Exception $e){
            return  getMsg(CodeController::SUCCESS_CODE,CodeController::SUCCESS_CODE_MSG.$e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     * 创建修改的表单
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where=[
            'id'=>$id
        ];
        $user_model=new userModel();
        try{
            $info=$user_model->userFind($where);
            return view('User.save',['info'=>$info]);
        }catch (\Exception $e){
            return getMsg(CodeController::ERROR_CODE,CodeController::ERROR_CODE_MSG.$e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     * 更新新闻信息
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $arr['content']=$request->input('content');
        $where=[
            'id'=>$id
        ];
        $user_model=new userModel();
        try{
            $user_model->userSave($where,$arr);
            return getMsg(CodeController::SUCCESS_CODE,CodeController::SUCCESS_CODE_MSG);
        }catch (\Exception $e){
            return getMsg(CodeController::ERROR_CODE,CodeController::ERROR_CODE_MSG.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     * 删除数据
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $where=[
            'id'=>$id
        ];
        $user_model=new userModel();
        try{
            $user_model->userDel($where);
            return getMsg(CodeController::SUCCESS_CODE,CodeController::SUCCESS_CODE_MSG);
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }
}
