<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
          <link type="text/css" rel="stylesheet" href="/tp/Public/xcdy/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <style>
        html, body {
            width: 100%;
            height: 100%;
            font-family: "SimSun", "Microsoft Yahei", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        html, body, div, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            position: relative;
            background: url("/tp/Public/xcdy/static/img/detail.png") 0 0 no-repeat;
            background-size: 100% 100%;
        }
        .detail-title {
            width: 44%;
            position: absolute;
            left: 41%;
            top: 10%;
            font-weight: bold;
            /* text-align: center; */
        }
        .detail-content {
            width: 80%;
            height: 65%;
            padding: 25px;
            text-align: justify;
            overflow-x: hidden;
            overflow-y: auto;
            position: absolute;
            top: 25%;
            left: 10%;
        }
        .detail-content p {
            font-size: 13px !important;
        }
        .detail-content table {
            width: 100%;
            margin: 10px 0 20px 0;
            text-align: center;
            border: 1px solid #CCC;
        }
        .detail-content table * {
            font-size: 13px !important;
        }
        .detail-content table caption {
            text-align: center;
        }
        .detail-content table td {
            border: 1px solid #CCC;
        }
    </style>
</head>
<body>
<div class="detail-title"><?php echo ($ques["title"]); ?></div>
<div class="detail-content"><?php echo ($ques["content"]); ?></div>
</body>
</html>