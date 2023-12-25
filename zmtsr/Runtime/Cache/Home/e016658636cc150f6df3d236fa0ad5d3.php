<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>“最美汤山人” <?php echo ($show["name"]); ?></title>
    <script>
        document.querySelector('html').style.fontSize = window.screen.width / 20 + 'px';
        window.onresize = function () {
            document.querySelector('html').style.fontSize = window.screen.width / 20 + 'px';
        }
    </script>
    <style>
        .back {
            position: relative;
            font-size: 13px;
            color: #fff;
            text-decoration: none;
        }
        .back::before {
            position: absolute;
            left: -18px;
            top: 0;
            width: 0;
            height: 0;
            content: '';
            border-width: 0 20px 20px;
            border-style: solid;
            border-color: transparent transparent green;
            transform: rotate(-90deg);
            z-index: -1;
        }
        .back::after {
            position: absolute;
            left: 12px;
            top: 0;
            width: 60px;
            height: 20px;
            content: '';
            background-color: green;
            z-index: -1;
        }
        img {
            max-width: 100%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php echo ($show["story"]); ?>
    <?php if(!empty($show['story_img'])): ?><img src="http://wx.bjcpn.com/tp/Public/zmtsr/home/<?php echo ($show["story_img"]); ?>" alt=""><?php endif; ?>
    <a class="back" href="javascript:history.go(-1)">返回上一页</a>
</div>
</body>
</html>