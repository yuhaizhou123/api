<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>后台管理</title>
    <link rel="stylesheet" href="{{URL::asset('layui/css/layui.css')}}">
    <script src="{{URL::asset('layui/layui.js')}}"></script>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">

@include('Admin.Layouts.top')

@include('Admin.Layouts.left')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;"><h1>欢迎来到风雨同洲旗下----小说网后台</h1></div>
    </div>
</div>

<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>
