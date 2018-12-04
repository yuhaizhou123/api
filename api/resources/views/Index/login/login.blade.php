<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta content="telephone=no,email=no" name="format-detection">
    <script src="{{URL::asset('muban/')}}/js/flexible.0.3.4.js"></script>
    <link href="https://s.zhulang.com/images/zl-logo114.png" rel="apple-touch-icon-precomposed">
    <title>登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="{{URL::asset('muban/')}}/css/zlm-b4a23cdd8b.css" type="text/css">
    <script src="{{URL::asset('layui/layui.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('layui/css/layui.css')}}">
</head>
<body  >
<div class="wrap">
    <header class="pg-hd">
        <a href="javascript:void(0)" class="icon fl backicon"><i class="iconfont">返回</i></a>
        <h2>登&nbsp;&nbsp;&nbsp;录</h2>
        <a href="/index" class="icon fr"><i class="iconfont">首页</i></a>
    </header>

    <div class="log-fm">
        <form action="http://api.ccc.com/login_do" id="log-fm" method="post">
            <ul class="fm-ipt ipt-grp">
                <li>
                    <i class="icon iconfont iconuser">账号:</i><input type="text" id="phone" name="username" maxlength="30" placeholder="      手机号" class="txt">
                </li>
                <li>
                    <i class="icon iconfont iconlock">密码:</i><input type="password" id="pwd" name="pwd"  maxlength="30" placeholder="     请输入密码" class="txt">
                </li>
            </ul>
            <button class="sub-btn" id="btn" type="submit">
                登录
            </button>
        </form>
        <iframe src="about:blank;" name="login-proxy" id="login-proxy" width="0" height="0" style="display:none;"></iframe>
        <div class="log-link">
            <a href="/reg" class="reg-link fl">立即注册</a>
            <a href="javascript:" id="forget-pass" class="fr">忘记密码</a>
        </div>
    </div>
    <div class="auth-log">
        <h2><span>合作网站账号登录</span></h2>
        <div class="auth-icon">
            <a href="/oauth/go/wapsina" class="icon-wb"><i></i>微博</a>
            <a href="/oauth/go/wapwx" class="icon-wx"><i></i>微信</a>
            <a href="/oauth/go/wapqq" class="icon-qq"><i></i>QQ</a>
        </div>
        <div class="auth-btn">
            <a href="/oauth/go/wapqq" class="fl sns-qq"></a>
            <a href="/oauth/go/wapsina" class="fr sns-wb"></a>
        </div>
    </div>

    <style>
        .clog{ margin: 0 10px;
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 80%;
            line-height: 1.5;
            background-color: #f5f5f5;
            color: #666; }
    </style>
    <div class="clog" style="display: none;" id="clog"></div>

</div>

<script type="text/javascript" src="{{URL::asset('muban/')}}/js/lib.js"></script>
<script type="text/javascript" src="{{URL::asset('muban/')}}/js/reglog-566aff4557.js"></script>
<script type="text/javascript">
//引入layui
layui.use('layer',function(){
    var layer=layui.layer;
//    //点击登录
//    $('#btn').click(function(){
//        var phone=$('#phone').val();
//        var pwd=$('#pwd').val();
//        if(phone==''){
//            layer.msg('手机号不能为空',{icon:0});
//            return false;
//        }
//        if(pwd==''){
//            layer.msg('密码不能为空',{icon:0});
//            return false;
//        }
//        alert(phone);
//        alert(pwd);
//    })
})
</script>
</body>
</html>