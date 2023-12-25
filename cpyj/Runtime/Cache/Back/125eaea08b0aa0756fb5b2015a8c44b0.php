<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>后台登录</title>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="/tp/Public/xcdy/static/back/css/style.css" type="text/css" media="all"/>
    <!-- Style-CSS -->
    <link rel="stylesheet" href="/tp/Public/xcdy/static/back/css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="/tp/Public/xcdy/static/back/css/08bc4bce614b4f4b99f7ec031be51af5.css" rel="stylesheet">
    <link href="/tp/Public/xcdy/static/back/css/5385c2255c024374a7c0418e2162d98f.css" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
<!-- bg effect -->
<div id="bg">
    <canvas></canvas>
    <canvas></canvas>
    <canvas></canvas>
</div>
<!-- //bg effect -->
<!-- title -->
<h1>昌平应急举报信息后台管理系统</h1>
<!-- //title -->
<!-- content -->
<div class="sub-main-w3">
    <form action="<?php echo U('Index/login');?>" method="post">
        <h2>请登录
            <i class="fas fa-level-down-alt"></i>
        </h2>
        <div class="form-style-agile">
            <label>
                <i class="fas fa-user"></i>
                用户名
            </label>
            <input placeholder="Username" name="name" type="text" required="">
        </div>
        <div class="form-style-agile">
            <label>
                <i class="fas fa-unlock-alt"></i>
                密码
            </label>
            <input placeholder="Password" name="password" type="password" required="">
        </div>
        <!-- checkbox -->
        <!--<div class="wthree-text">
            <ul>
                <li>
                    <label class="anim">
                        <input type="checkbox" class="checkbox" required="">
                        <span>记住我</span>
                    </label>
                </li>
                <li>
                    <a href="javascript:;" onclick="alert('请联系管理员进行处理！')">忘记密码？</a>
                </li>
            </ul>
        </div>-->
        <!-- //checkbox -->
        <input type="submit" value="登录">
    </form>
</div>
<!-- //content -->

<!-- copyright -->
<div class="footer">
    <!-- <p>Copyright &copy; 2018. 北京昌平人力资源公共服务中心 All rights reserved.</p> -->
</div>
<!-- //copyright -->

<!-- Jquery -->
<script src="/tp/Public/xcdy/static/back/js/jquery-3.3.1.min.js"></script>
<!-- //Jquery -->

<!-- effect js -->
<script src="/tp/Public/xcdy/static/back/js/canva_moving_effect.js"></script>
<!-- //effect js -->

</body>

</html>