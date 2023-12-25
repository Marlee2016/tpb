<?php

define('WEBSITE', 'http://wx.bjcpn.com/tp/seme.php');
define('APPID', 'wx9b1b317a85c2a74c');
define('APPSECRET', '9de1b98de21efbac6f5830b47b183120');
define('REDIRECT_URL', 'http://wx.bjcpn.com/tp/seme.wx.php');
define('SCOPE', 'snsapi_userinfo');
define('STATE', '');

if(!empty($_GET['code'])) {
    $code = $_GET['code'];
    initParams($code);
}

function initParams($a) {
    $code = $a;
    $appid = APPID;
    $appsecret = APPSECRET;
    getToken($appid, $appsecret, $code);
}
function getToken($appid, $appsecret, $code) {
    if (empty($code)) exit('授权失败');
    $token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';
    $token = json_decode(file_get_contents($token_url));
    if (isset($token->errcode)) {
        echo '<h1>错误：</h1>'.$token->errcode;
        echo '<br/><h2>错误信息：</h2>'.$token->errmsg;
        die();
    }
    //var_dump($token);//
    getAccessToken($appid, $token);
}

function getAccessToken($appid, $token) {
    $access_token_url = 'https://api.weixin.qq.com/sns/oauth2/refresh_token?appid='.$appid.'&grant_type=refresh_token&refresh_token='.$token->refresh_token;
    //转成对象
    $access_token = json_decode(file_get_contents($access_token_url));
    if (isset($access_token->errcode)) {
        echo '<h1>错误：</h1>'.$access_token->errcode;
        echo '<br/><h2>错误信息：</h2>'.$access_token->errmsg;
        die();
    }
    //var_dump($access_token);//
    getUserInfo($access_token);
}

function getUserInfo($access_token){
    $user_info_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token->access_token.'&openid='.$access_token->openid.'&lang=zh_CN';
    //转成对象
    $user_info = json_decode(file_get_contents($user_info_url));
    if (isset($user_info->errcode)) {
        echo '<h1>错误：</h1>'.$user_info->errcode;
        echo '<br/><h2>错误信息：</h2>'.$user_info->errmsg;
        die();
    }
    //打印用户信息
    //var_dump($user_info);
    saveInfoInSession($user_info);
}

function saveInfoInSession($user_info) {
    $user_openid = $user_info->openid;
    $user_nickname = $user_info->nickname;
    session_start();
    $_SESSION['user_openid'] = $user_openid;
    $_SESSION['user_nickname'] = $user_nickname;
    //echo $_SESSION['user_openid'].'---'.$_SESSION['user_nickname'];exit;
    /*$user_sex = $user_info->sex; //用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
    $user_province = $user_info->province ? $user_info->province : '';
    $user_city = $user_info->city ? $user_info->city : '';
    $user_country = $user_info->country ? $user_info->country : '';
    //$user_unionid = $user_info->unionid; //只有在用户将公众号绑定到微信开放平台帐号后，才会出现该字段
    $user_headimgurl = $user_info->headimgurl ? $user_info->headimgurl : ''; //用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像），用户没有头像时该项为空。若用户更换头像，原有头像URL将失效
    $data = array(
        'nickname'=>$user_nickname,
        'gender'=>$user_sex,
        'province'=>$user_province,
        'city'=>$user_city,
        'country'=>$user_country,
        'headerimgurl'=>$user_headimgurl,
        'updatetime'=>time(),
        'addtime'=>time()
    );*/
    returnIndex();
}

function returnIndex() {
    header('Location:'.WEBSITE);
}