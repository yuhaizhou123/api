<!DOCTYPE html>
<html lang="en" data-dpr="1" style="font-size: 36px;"><head>
    <meta charset="utf-8">
    <meta content="telephone=no,email=no" name="format-detection">
    <script src="//hm.baidu.com/hm.js?e5883283abd0285c634898e065e21499"></script><script src="{{URL::asset('muban/')}}/js/flexible.0.3.4.js"></script><style>@charset "utf-8";html{color:#000;background:#fff;overflow-y:scroll;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}html *{outline:0;-webkit-text-size-adjust:none;-webkit-tap-highlight-color:rgba(0,0,0,0)}html,body{font-family:sans-serif}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td,hr,button,article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{margin:0;padding:0}input,select,textarea{font-size:100%}table{border-collapse:collapse;border-spacing:0}fieldset,img{border:0}abbr,acronym{border:0;font-variant:normal}del{text-decoration:line-through}address,caption,cite,code,dfn,em,th,var{font-style:normal;font-weight:500}ol,ul{list-style:none}caption,th{text-align:left}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:500}q:before,q:after{content:''}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}a:hover{text-decoration:underline}ins,a{text-decoration:none}</style><meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link href="https://s.zhulang.com/images/zl-logo114.png" rel="apple-touch-icon-precomposed">
    <title>支付宝充值-逐浪小说网</title>
    <meta name="keywords" content="充值,逐浪网,逐浪币充值">
    <meta name="description" content="通过支付宝为逐浪账号充值逐浪币。">
    <link rel="stylesheet" href="{{URL::asset('muban/')}}/css/zlm-b4a23cdd8b.css" type="text/css">
</head>
<body ontouchstart="" class="chn-undefined" style="font-size: 12px;">
<div class="wrap">
    <header class="pg-hd">
        <a href="javascript:void(0)" class="icon fl backicon"><i class="iconfont">返回</i></a>
        <h2>支付宝充值</h2>
        <a href="/index" class="icon fr"><i class="iconfont">首页</i></a>
    </header>
    <h3 class="ch3">
        选择支付金额
    </h3>
    <form name="alipay" action="https://m.zhulang.com/pay/alipay/index.html" method="post">
        <div class="cm-box chg-vol" id="chg-vol">
            <ol>
                <li data-vol="10" class="cur">
                    <strong>10元</strong>
                    <span>1000逐浪币</span>
                </li>
                <li data-vol="30">
                    <strong>30元</strong>
                    <span>3000逐浪币</span>
                </li>
                <li data-vol="50">
                    <strong>50元</strong>
                    <span>5000逐浪币</span>
                </li>
            </ol>
            <ol>
                <li data-vol="100">
                    <strong>100元</strong>
                    <span>10000逐浪币</span>
                </li>
                <li data-vol="500">
                    <strong>500元</strong>
                    <span>50000逐浪币</span>
                </li>
                <li data-vol="1000">
                    <strong>1000元</strong>
                    <span>100000逐浪币</span>
                </li>
            </ol>
            <input type="hidden" name="money" value="10">
            <button class="sub-btn blue-btn" type="submit">确认充值</button>
        </div>
    </form>
    <div class="cm-box alt-pay" id="alt-pay">
        <a href="https://m.zhulang.com/pay/index/wap_wx.html" class="sub-btn alt-btn weixin">微信充值</a>
        <!-- <a href="https://m.zhulang.com/pay/index/qq.html" class="sub-btn alt-btn" >QQ充值</a> -->
        <!-- <a href="https://m.zhulang.com/pay/index/mobile.html" class="sub-btn alt-btn">手机充值</a> -->
    </div>
</div>
<script type="text/javascript" src="{{URL::asset('muban/')}}/js/lib.js"></script>
<script type="text/javascript" src="https://s.zhulang.com/wap/pub/v2/js/bundle/charge-9b02cd133d.js"></script>
<script>
    $(function(){
        if(navigator.userAgent.match(/MicroMessenger/i)){
            $('#alt-pay').find('.weixin').show()
        }
    })
</script>

</body></html>