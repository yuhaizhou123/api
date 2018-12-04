<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta content="telephone=no,email=no" name="format-detection">
    <script src="{{URL::asset('muban/')}}/js/flexible.0.3.4.js"></script>
    <link href="https://s.zhulang.com/images/zl-logo114.png" rel="apple-touch-icon-precomposed">
    <title>注册逐浪账号</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="{{URL::asset('muban/')}}/css/zlm-b4a23cdd8b.css" type="text/css">
</head>
<body ontouchstart>
<div class="wrap">
    <header class="pg-hd">
        <a href="javascript:void(0)" class="icon fl backicon"><i class="iconfont">返回</i></a>

        <h2>注册</h2>
        <a href="/index" class="icon fr"><i class="iconfont">首页</i></a>
    </header>

    <div class="reg-succ">
        <div class="done"></div>
        <span class="done-txt">注册成功！</span>
        <a href="/login/index.html" class="login-link" id="go-log">
            <button class="sub-btn done-btn">立即登录</button>
        </a>

        <p><span id="ctd-s">3</span>秒后去登录页面...</p>
    </div>
    <div class="reg-cnt">
        <div class="reg-fm">
            <form action="/register/phone.html" id="reg-fm" method="post">
                <ul class="fm-ipt">
                    <li>
                        <label for="phone">手机号</label><input type="text" id="phone" name="phone" maxlength="11"
                                                             placeholder="请填写正确的手机号" class="txt">
                    </li>
                    <li>
                        <label for="pass">密　码</label><input type="password" id="pass" name="password" maxlength="30"
                                                            placeholder="建议6-12位数字符号和字母的组合" class="txt">
                    </li>
                    <li class="sms-li">
                        <input type="text" class="txt sms-ipt" id="sms-ipt" placeholder="输入验证码" name="verify">
                        <button type="button" class="sms-btn" id="code">获取验证码
                        </button>
                    </li>
                </ul>
                <input type="hidden" name="dest" value="">
                <button class="sub-btn" id="" type="button">
                    <em>注册</em>
                </button>
                <div class="log-now">
                    已有账号，<a href="/login" class="login-link blue">立即登录</a>
                </div>
            </form>
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

    </div>
</div>
<script type="text/html">
	</script>

<script type="text/javascript" src="{{URL::asset('muban/')}}/js/lib.js"></script>
<script type="text/javascript" src="{{URL::asset('muban/')}}/js/reglog-566aff4557.js"></script>
</body>
</html>
<script>
    //获取验证码
    $('#code').click(function(){
        var phone=$('#phone').val();
        if(phone==''){
            alert('手机号不能为空');
            return false;
        }
        $.ajax({
            url:'/reg_code',
            type:'post',
            data:{'_token':'{{csrf_token()}}',phone:phone},
            success:function(msg){
                console.log(msg);
            }
        })
    })
</script>