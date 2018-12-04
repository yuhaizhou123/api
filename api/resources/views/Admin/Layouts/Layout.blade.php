<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="stylesheet" href="{{URL::asset('layui-v2.4.5/layui/css/layui.css')}}">
    <script src="{{URL::asset('layui-v2.4.5/layui/layui.js')}}"></script>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    {{--顶部--}}
    @include('Admin.Layouts.top')
{{--左侧--}}
    @include('Admin.Layouts.left')


    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;"></div>
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