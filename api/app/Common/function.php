<?php
//use Myclass\SignatureHelper;
function getMsg($val1,$val2,$data=''){
    $arr=[
        'status'=>$val1
        ,'msg'=>$val2
        ,'data'=>$data
    ];
    return json_encode($arr);
}



function newPwd($pwd,$salt){
    return md5(md5($pwd).$salt);
}
function salt(){
    $str="123456789087654sdfgsdfgsnsgdfgs%$#@&^%$#@$#@# ";
    return substr(str_shuffle($str),rand(0,20),5);
}
//五位数验证码
function code(){
    return rand('10000','99999');
}

//短信发送
function send_tel($number,$code)
{
//    if(C('SENDSTATUS')!=1){
//        return true;
//    }
    $params = array();

    // *** 需用户填写部分 ***

    // fixme 必填: 请参阅 https://ak-console.aliyun.com/ 取得您的AK信息
    $accessKeyId = 'LTAIt7Z5if089bMc';
    $accessKeySecret = 'pDB2UrK1RusbJ3joJyGcAY1W4Uf1Z0';

    // fixme 必填: 短信接收号码
    $params["PhoneNumbers"] = $number;

    // fixme 必填: 短信签名，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
    $params["SignName"] = '于海洲';

    // fixme 必填: 短信模板Code，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
    $params["TemplateCode"] = 'SMS_142388100';

    // fixme 可选: 设置模板参数, 假如模板中存在变量需要替换则为必填项
    $params['TemplateParam'] = Array(
        "code" => $code,
        // "product" => "短信验证"
    );

    // fixme 可选: 设置发送短信流水号
    $params['OutId'] = "12345";

    // fixme 可选: 上行短信扩展码, 扩展码字段控制在7位或以下，无特殊需求用户请忽略此字段
    $params['SmsUpExtendCode'] = "1234567";


    // *** 需用户填写部分结束, 以下代码若无必要无需更改 ***
    if (!empty($params["TemplateParam"]) && is_array($params["TemplateParam"])) {
        $params["TemplateParam"] = json_encode($params["TemplateParam"], JSON_UNESCAPED_UNICODE);
    }

    // 初始化SignatureHelper实例用于设置参数，签名以及发送请求
//    include('../Myclass/SignatureHelper.class.php');
    $helper = new \Myclass\SignatureHelper();
//    var_dump($helper);exit;
    // 此处可能会抛出异常，注意catch
    $content = $helper->request(
        $accessKeyId,
        $accessKeySecret,
        "dysmsapi.aliyuncs.com",
        array_merge($params, array(
            "RegionId" => "cn-hangzhou",
            "Action" => "SendSms",
            "Version" => "2017-05-25",
        ))
    );

    if ($content) {
        return true;
    } else {
        return false;
    }
}