<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录页面</title>
    <script src="{{URL::asset('jquery1.7.min.js')}}"></script>
    <script src="{{URL::asset('layui/layui.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('layui/css/layui.css')}}">
    <style>
        #top{
            width: 100%;
            height:100px;
            background:#00a2d4;
            text-align: center;
            color: #fff;
            font-size: 50px;
            line-height: 100px;
        }
        #user{
            width: 200px;
            height: 40px;
        }
        #form{
            padding-top: 100px;
            width: 100%;
            text-align: center;
        }
        #user{
            width: 300px;
            margin-bottom: 20px;
            height: 40px;
        }
        #pwd{
            width: 300px;
            margin-bottom: 20px;
            height: 40px;
        }
        #btn{
            width: 300px;
            height: 40px;
            background:#00a2d4;
            border:0;
            font-size: 20px;
            color: #fff;
        }
    </style>
</head>
<body>
<div id="top">
        后台登录
</div>
<div id="form">
    <form>
       <center>
           <table>
            <tr>
                <td>用户名：</td>
                <td><input type="text" id="user"></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="password" id="pwd"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" value="登     录" id="btn"></td>
            </tr>
        </table>
        </center>
    </form>
</div>
</body>
</html>
<script>
    layui.use('layer',function(){
        var layer=layui.layer;

    //点击登录
    $('#btn').click(function(){
        var user=$('#user').val();
        if(user==''){
            alert('用户名不能为空');
            return false;
        }
        var pwd=$('#pwd').val();
        if(pwd==''){
            alert('密码不能为空');
            return false;
        }
        {{--$.post('/admin_login_do',{'_token':'{{csrf_token()}}',user:user,pwd:pwd},function(msg){--}}
            {{--console.log(msg)--}}
            {{--if(msg==1){--}}
                {{--layer.msg('登录成功 即将跳转', {--}}
                    {{--icon: 1,--}}
                    {{--time: 2000 //2秒关闭（如果不配置，默认是3秒）--}}
                {{--}, function(){--}}
                    {{--location.href="{{action('IndexController@index')}}";--}}
                {{--});--}}
            {{--}else{--}}
                {{--layer.msg(msg,{icon:0});--}}
            {{--}--}}
        {{--})--}}
    })
    })
</script>