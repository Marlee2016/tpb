<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <base href="/tp/Public/2018SecondMeeting/Back/">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <title>请登录</title>
<style>
    body{color:#fff; font-family:"微软雅黑"; font-size:14px;}
    .wrap1{position:absolute; top:0; right:0; bottom:0; left:0; margin:auto }/*把整个屏幕真正撑开--而且能自己实现居中*/
    .main_content{background:url(images/main_bg.png) repeat; margin-left:auto; margin-right:auto; text-align:left; float:none; border-radius:8px;}
    .form-group{position:relative;}
    .login_btn{display:block; background:#3872f6; color:#fff; font-size:15px; width:100%; line-height:40px; border-radius:3px; border:none; }
    .login_input{width:100%; border:1px solid #3872f6; border-radius:3px; line-height:40px; padding-left:35px; background:none;}
    .icon_font{position:absolute; bottom:15px; left:10px; font-size:18px; color:#3872f6;}
    .font16{font-size:16px;}
    .mg-t20{margin-top:20px;}
    @media (min-width:200px){.pd-xs-20{padding:20px;}}
    @media (min-width:768px){.pd-sm-50{padding:50px;}}
    #grad {
      background: -webkit-linear-gradient(#4990c1, #52a3d2, #6186a3); /* Safari 5.1 - 6.0 */
      background: -o-linear-gradient(#4990c1, #52a3d2, #6186a3); /* Opera 11.1 - 12.0 */
      background: -moz-linear-gradient(#4990c1, #52a3d2, #6186a3); /* Firefox 3.6 - 15 */
      background: linear-gradient(#4990c1, #52a3d2, #6186a3); /* 标准的语法 */
    }
</style>
</head>
<body style="background:url(images/bg.jpg) no-repeat;">
    <div class="container wrap1" style="height:450px;">
        <div class="col-sm-8 col-md-5 center-auto pd-sm-50 pd-xs-20 main_content">
            <p class="text-center font16">用 户 登 录</p>
            <form>
                <div class="form-group mg-t20">
                    <i class="icon-user icon_font"></i>
                    <input type="text" class="login_input" name="user" placeholder="请输入用户名" autofocus />
                </div>
                <div class="form-group mg-t20">
                    <i class="icon-lock icon_font"></i>
                    <input type="password" class="login_input" name="pass" placeholder="请输入密码" />
                </div>
                <button type="submit" class="login_btn">登  录</button>
           </form>
        </div>
    </div>
</body>
<script src="http://wx.bjcpn.com/tp/Public/common/jquery-3.2.1.min.js"></script>
<!-- <script src="http://lee.cc/Public/common/jquery-3.2.1.min.js"></script> -->
<script>
$(function () {
    $('button').click(function (e) {
        e.preventDefault();
        var user = $.trim($('input[name=user]').val());
        var pass = $.trim($('input[name=pass]').val());
        if (!user || !pass) {
            alert('请输入完整登录信息！');
        } else {
            $.post("/tp/seme.php/Back/User/login", {user:user, pass:pass}, function (res) {
                if (res.code == 1) {
                    location.href = "<?php echo U('Total/index');?>";
                } else if (res.code == 2) {
                    alert('用户名或密码错误！');
                } else if (res.code == 3) {
                    alert('请填写完整登录信息！');
                }
            })
        }
    })
})
</script>
</html>